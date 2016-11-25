<?php

namespace App\DataTables;

use App\Member;
use Yajra\Datatables\Services\DataTable;

class OrganisationsDatatable extends DataTable
{
    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('', '')
            ->make(true);
    }

    /**
     * Get the query object to be processed by dataTables.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
     */
    public function query()
    {
        $query = Member::query();

        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->ajax('')
                    ->parameters([
                        'dom' => 'Bfrtip',
                        'scrollX' => true,
                        'buttons' => ['csv', 'excel', 'pdf', 'print', 'reset', 'reload'],
                    ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
        'member_id',
        'organization_name',
        'member_status_code',
        'member_status_date',
        'country_code',
        'language_code',
        'currency_code',
        'category_code',
        'organization_description',
        'telephone_number',
        'postal_address',
        'physical_address',
        'account_purpose',
        'credit_amount',
        'mimimum_credit_amount_alert',
        'max_user_accounts',
        'member_xml_parameters',
        'date_accessed',
        'date_created',
        'date_modified',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'organisationsdatatables_' . time();
    }
}
