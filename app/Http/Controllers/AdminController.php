<?php

namespace App\Http\Controllers;

use Ezegyfa\LaravelHelperMethods\Crm\Controllers\BlueAdminController;

class AdminController extends BlueAdminController
{
    public $indexTemplateName = 'euractiv_admin_index';
    public $editTemplateName = 'euractiv_admin_edit';
    public $templateFolderPath = __DIR__ . '/../Templates';
    public $filterFormItemPrefix = 'euractiv-admin-filter';
}
