<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Response;

class DataBaseController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function downloadBackup()
    {
        Artisan::call('app:backup-database-command');

        $databaseName = config('database.connections.mysql.database');
        $date = date('Y-m-d_H-i-s');
        $file = storage_path("app/{$databaseName}_{$date}_backup.sql");

        return Response::download($file);
    }
}
