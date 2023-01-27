<?php

namespace App\Imports;

use App\Models\Lista;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ListaImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Lista([
            'rut'     => $row['rut'],
            'nombre'  => $row['nombre'],
            'apellido' => $row['apellido'],
            'cargo'   => $row['cargo'],
            'estado'  => $row['estado']
        ]);
    }

    public function rules(): array
    {
        return [
            'rut'      => 'required|min:8|max:12',
            'nombre'   => 'required|min:8|max:120',
            'apellido' => 'required|min:8|max:120',
            'cargo'    => 'required|min:8|max:120',
            'estado'   => 'required|min:8|max:120'
        ];
    }

    public function batchSize(): int
    {
        return 1000;
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
