<?php

namespace App\PowerGridThemes;



use \PowerComponents\LivewirePowerGrid\Themes\Theme;
use \PowerComponents\LivewirePowerGrid\Themes\ThemeBase;

use PowerComponents\LivewirePowerGrid\Themes\Components\{
    Actions,
    Checkbox,
    ClickToCopy,
    Cols,
    Editable,
    FilterBoolean,
    FilterDatePicker,
    FilterInputText,
    FilterMultiSelect,
    FilterNumber,
    FilterSelect,
    Footer,
    Table,
    Toggleable
};

class AdminLTE3 extends ThemeBase
{
    public string $name = 'AdminLTE3';

    public function table(): Table
    {
        return Theme::table('table table-bordered table-checkable mb-2')
            ->div('table-responsive col-md-12', 'margin: 10px 0 10px;')
            ->thead('')
            ->tr('')
            ->th('', 'white-space: nowrap;min-width: 50px;padding-left: 15px;font-size: 0.75rem;padding-top: 8px;padding-bottom: 8px;')
            ->tbody('')
            ->tdBody('', 'vertical-align: middle; line-height: normal;')
            ->tdBodyTotalColumns('', 'font-size: 0.875rem; line-height: 1.25rem; --tw-text-opacity: 1; color: rgb(76 79 82 / var(--tw-text-opacity)); padding-left: 0.75rem; padding-right: 0.75rem; padding-top: 0.5rem; padding-bottom: 0.5rem;')
            ->tdBody('', 'vertical-align: middle; line-height: normal;white-space: nowrap;');
    }

    public function cols(): Cols
    {
        return Theme::cols()
            ->div('')
            ->clearFilter('', 'cursor:pointer; float: right;');
    }

    public function footer(): Footer
    {
        return Theme::footer()
            ->view($this->root() . '.footer')
            ->select('');
    }

    public function actions(): Actions
    {
        return Theme::actions()
            ->tdBody('text-center')
            ->rowsBtn('');
    }

    public function toggleable(): Toggleable
    {
        return Theme::toggleable()
            ->view($this->root() . '.toggleable');
    }

    public function editable(): Editable
    {
        return Theme::editable()
            ->view($this->root() . '.editable')
            ->span('d-flex justify-content-between')
            ->button('width: 100%;text-align: left;border: 0;padding: 4px;background: none')
            ->input('form-control');
    }

    public function clickToCopy(): ClickToCopy
    {
        return Theme::clickToCopy()
            ->span('d-flex justify-content-between');
    }

    public function checkbox(): Checkbox
    {
        return Theme::checkbox()
            ->th('', 'font-size: 1rem !important;text-align:center; width:50px !important;')
            ->div('form-check')
            ->label('')
            ->input('form-check-input');
    }

    public function filterBoolean(): FilterBoolean
    {
        return Theme::filterBoolean()
            ->view($this->root() . '.filters.boolean')
            ->select('form-control form-select');
    }

    public function filterDatePicker(): FilterDatePicker
    {
        return Theme::filterDatePicker()
            ->view($this->root() . '.filters.date-picker')
            ->input('form-control');
    }

    public function filterMultiSelect(): FilterMultiSelect
    {
        return Theme::filterMultiSelect()
            ->view($this->root() . '.filters.multi-select');
    }

    public function filterNumber(): FilterNumber
    {
        return Theme::filterNumber()
            ->base(attrStyle: 'min-width: 85px !important')
            ->view($this->root() . '.filters.number')
            ->input('form-control');
    }

    public function filterSelect(): FilterSelect
    {
        return Theme::filterSelect()
            ->view($this->root() . '.filters.select')
            ->select('form-control form-select');
    }

    public function filterInputText(): FilterInputText
    {
        return Theme::filterInputText()
            ->base(attrStyle: 'min-width: 165px !important')
            ->view($this->root() . '.filters.input-text')
            ->select('form-control mb-1 form-select')
            ->input('form-control');
    }
}
