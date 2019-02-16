<?php

namespace App\Console\Commands;

use Illuminate\Foundation\Console\ModelMakeCommand as BaseModelCommand;
use Symfony\Component\Console\Input\InputOption;
use Illuminate\Support\Facades\Schema as Schema;

class ModelMakeCommand extends BaseModelCommand
{

    protected $exclude = ['id', 'password', 'created_at', 'updated_at'];

    protected function getStub()
    {
        return __DIR__.'/stubs/model.stub';
    }

    protected function buildClass($name)
    {
        $stub = $this->files->get($this->getStub());

        return $this->replaceNamespace($stub, $name)
        ->replaceFillable($stub)
        ->replaceClass($stub, $name);
    }

    protected function replaceFillable(&$stub)
    {
        if($this->input->getOption('fillable'))
        {
            // On construit le nom de la table à partir du nom du modèle
            $table = str_plural(strtolower($this->getNameInput()));
            // On récupère le nom des colonnes
            $columns = Schema::getColumnListing($table);
            // On exclut les colonnes non désirées 
            $columns = array_filter($columns, function($value)
            {
              return !in_array($value, $this->exclude);
          });
            // On ajoute des apostrophes
            array_walk($columns, function(&$value) {
                $value = "'" . $value . "'";
            });
            // CSV format
            $columns = implode(',', $columns);
        }

        $stub = str_replace('DummyFillable', isset($columns)? $columns : '', $stub);

        return $this;
    }

    protected function getOptions()
    {
        return [
            ['migration', 'm', InputOption::VALUE_NONE, 'Create a new migration file for the model.'],
            ['fillable', null, InputOption::VALUE_NONE, 'Set the fillable columns.', null]
        ];
    }
}