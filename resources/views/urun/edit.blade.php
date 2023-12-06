@extends('admin.layout.layout')

@section('title')
    Ürünler Ve Hizmetler
@endsection

@section('css')
    <!-- DataTables CSS ve JavaScript dosyaları -->
@endsection

@section('content')
    <div class="tcol">
        <minotaur-topbar><!-- Menu Trigger For Mobile -->
            <div class="p-15" id="pageMenuTrigger"><a href="#" class="btn btn-primary btn-block"
                    ng-click="top.toggleMobileMenu($event)"><span class="title">Ürün ve Hizmetler</span><i
                        class="fa fa-caret-down pull-right" aria-hidden="true"></i></a></div>
            <div class="headBand">
                <div class="bg-white headBand-in"><!-- ngInclude: top.buttons -->
                    <div ng-include="top.buttons" class="btn-toolbar ng-scope">
                        <div class="minotaur-tab minotaur-tab-light ng-scope">
                            <ul class="nav nav-tabs nav-stacked">
                                <li class="uib-tab nav-item active"
                                    ng-class="{'active':$state.includes('product.all') || $state.includes('product.all.new') || $state.includes('product.all.detail') || $state.includes('product.all.edit')}">
                                    <a ui-sref="product.all" class="nav-link ng-binding" href="/product/all"><i
                                            class="fa fa-bars" aria-hidden="true"></i> Tümü</a>
                                </li>
                                <li class="uib-tab nav-item"
                                    ng-class="{'active':$state.includes('product.good') || $state.includes('product.good.new') || $state.includes('product.good.detail') || $state.includes('product.good.edit')}">
                                    <a ui-sref="product.good" class="nav-link ng-binding" href="/product/good"><i
                                            class="fa fa-balance-scale" aria-hidden="true"></i> Ürünler</a>
                                </li>
                                <li class="uib-tab nav-item"
                                    ng-class="{'active':$state.includes('product.service') || $state.includes('product.service.new') || $state.includes('product.service.detail') || $state.includes('product.service.edit')}">
                                    <a ui-sref="product.service" class="nav-link ng-binding" href="/product/service"><i
                                            class="fa fa-user-circle-o" aria-hidden="true"></i> Hizmetler</a>
                                </li>
                                <li class="uib-tab nav-item"
                                    ng-class="{'active':$state.includes('warehouse') || $state.includes('warehouse.new') || $state.includes('warehouse.detail') || $state.includes('warehouse.edit')}">
                                    <a ui-sref="warehouse.index" class="nav-link ng-binding" href="/warehouse"><i
                                            class="fa fa-cubes" aria-hidden="true"></i> Depolar</a>
                                </li>
                                <!-- ngIf: main.clientSettings.variant_enabled -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </minotaur-topbar>
        <div class="p-15 bodyBand">
            <div class="tile">
                <section class="tile-header">
                    <div class="page-title">
                        <h1 class="title ng-binding">Ürün ve Hizmetler</h1>
                    </div>
                </section>
                <section class="tile-body">
                    <nko-accordion-filter filter-data="ctrl.filterData" clear-callback="ctrl.clearFilter"
                        heading="Detaylı Arama" is-open="ctrl.isOpen" filter="product" instance="ctrl.dtInstance"
                        class="ng-isolate-scope">
                        <uib-accordion close-others="oneAtATime"
                            class="text-center tableFilterAccordion d-inline-block w-100">
                            <div role="tablist" class="panel-group" ng-transclude="">
                                <div uib-accordion-group="" class="text-left ng-scope ng-isolate-scope panel"
                                    is-open="isOpen">
                                    <div role="tab" id="accordiongroup-10324-9724-tab" aria-selected="false"
                                        class="panel-heading" ng-keypress="toggleOpen($event)">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" href="" aria-expanded="false"
                                                aria-controls="accordiongroup-10324-9724-panel" class="accordion-toggle"
                                                ng-click="toggleOpen()" uib-accordion-transclude="heading"
                                                ng-disabled="isDisabled" uib-tabindex-toggle=""><span
                                                    uib-accordion-header="" ng-class="{'text-muted': isDisabled}"
                                                    class="ng-binding"><button type="button"
                                                        class="btn btn-default toggleBtn d-inline-block ng-binding ng-scope">Detaylı
                                                        Arama <i class="glyphicon pull-right glyphicon-chevron-down"
                                                            ng-class="{'isOpen': isOpen}"></i></button></span></a>
                                        </h4>
                                    </div>
                                    <div id="accordiongroup-10324-9724-panel"
                                        aria-labelledby="accordiongroup-10324-9724-tab" aria-hidden="true" role="tabpanel"
                                        class="panel-collapse collapse" uib-collapse="!isOpen" aria-expanded="false"
                                        style="height: 0px;">
                                        <div class="panel-body" ng-transclude=""><uib-accordion-heading
                                                class="m-0 p-0 ng-scope"></uib-accordion-heading><nko-filter
                                                filter-data="filterData" type="product" is-open="isOpen"
                                                instance="instance" clear-callback="clearCallback"
                                                class="ng-scope ng-isolate-scope"><!-- ngInclude: --><ng-include
                                                    src="dynamicTemplateUrl" class="ng-scope">
                                                    <div class="ng-scope">
                                                        <form name="userForm" validate=""
                                                            class="ng-pristine ng-valid-lower-than ng-valid-minlength ng-valid-maxlength ng-valid ng-valid-required">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div
                                                                        ng-init="category === 'all' ? filterData.type = null : filterData.type = category">
                                                                    </div><!-- ngIf: category === 'all' -->
                                                                    <div class="row ng-scope" ng-if="category === 'all'">
                                                                        <!--START_SEARCH_FORM--><!--CLASS-->
                                                                        <div class="form-group col-md-4 text-left">
                                                                            <nko-label
                                                                                value="'PAGE_PRODUCT.TABLE.SEARCH.PRODUCT_TYPE'"
                                                                                class="ng-isolate-scope"><label
                                                                                    class="minotaur-label ">Tür</label>
                                                                                <!-- ngIf: isOptional --><!-- ngIf: isRequired --></nko-label>
                                                                            <div><label
                                                                                    class="checkbox-inline minotaur-radio minotaur-radio-lg ng-binding">Tümü
                                                                                    <input type="radio"
                                                                                        ng-model="filterData.type"
                                                                                        ng-value="null"
                                                                                        class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                        name="10377">
                                                                                    <div class="input-indicator"></div>
                                                                                </label><label
                                                                                    class="checkbox-inline minotaur-radio minotaur-radio-lg ng-binding">Ürün
                                                                                    <input type="radio"
                                                                                        ng-model="filterData.type"
                                                                                        value="good" ng-value="'good'"
                                                                                        ng-change="clearProductSearchInputs('good')"
                                                                                        class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                        name="10378">
                                                                                    <div class="input-indicator"></div>
                                                                                </label><label
                                                                                    class="checkbox-inline minotaur-radio minotaur-radio-lg ng-binding">Hizmet
                                                                                    <input type="radio"
                                                                                        ng-model="filterData.type"
                                                                                        value="service"
                                                                                        ng-value="'service'"
                                                                                        ng-change="clearProductSearchInputs('service')"
                                                                                        class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                        name="10379">
                                                                                    <div class="input-indicator"></div>
                                                                                </label></div>
                                                                        </div>
                                                                    </div><!-- end ngIf: category === 'all' -->
                                                                    <div class="row"><!--CODE-->
                                                                        <div
                                                                            class="form-group col-lg-4 col-md-6 col-sm-12 nko-class">
                                                                            <nko-label value="'TABLE.SEARCH.CODE'"
                                                                                class="ng-isolate-scope"><label
                                                                                    class="minotaur-label ">Kod</label>
                                                                                <!-- ngIf: isOptional --><!-- ngIf: isRequired --></nko-label><nko-input
                                                                                name="code" ng-model="filterData.code"
                                                                                class="ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty"><input
                                                                                    type="text" name="name"
                                                                                    ng-model="ngModel"
                                                                                    ng-change="ngChange()"
                                                                                    ng-disabled="ngDisabled"
                                                                                    class="form-control  ng-valid ng-valid-required"
                                                                                    minlength="" maxlength=""
                                                                                    ng-required="ngRequired"
                                                                                    autocomplete="" input-mask=""
                                                                                    mask-options="{ 'regex': regexStr, 'placeholder': '' }"></nko-input><nko-warning
                                                                                form="accountInfoForm" field="code"
                                                                                class="ng-isolate-scope"><!-- ngIf: ifExists === false || form[field].$dirty --></nko-warning>
                                                                        </div><!--NAME-->
                                                                        <div
                                                                            class="form-group col-lg-4 col-md-6 col-sm-12">
                                                                            <!-- ngIf: 'service' !== filterData.type --><nko-label
                                                                                value="'PAGE_PRODUCT.NEW.NAME.GOOD'"
                                                                                ng-if="'service' !== filterData.type"
                                                                                class="ng-scope ng-isolate-scope"><label
                                                                                    class="minotaur-label ">Ürün
                                                                                    Adı</label>
                                                                                <!-- ngIf: isOptional --><!-- ngIf: isRequired --></nko-label><!-- end ngIf: 'service' !== filterData.type --><!-- ngIf: 'service' === filterData.type --><nko-input
                                                                                name="name" ng-model="filterData.name"
                                                                                class="ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty"><input
                                                                                    type="text" name="name"
                                                                                    ng-model="ngModel"
                                                                                    ng-change="ngChange()"
                                                                                    ng-disabled="ngDisabled"
                                                                                    class="form-control  ng-valid ng-valid-required"
                                                                                    minlength="" maxlength=""
                                                                                    ng-required="ngRequired"
                                                                                    autocomplete="" input-mask=""
                                                                                    mask-options="{ 'regex': regexStr, 'placeholder': '' }"></nko-input><nko-warning
                                                                                form="accountInfoForm" field="name"
                                                                                class="ng-isolate-scope"><!-- ngIf: ifExists === false || form[field].$dirty --></nko-warning>
                                                                        </div><!--BARCODE-->
                                                                        <div
                                                                            class="form-group col-lg-4 col-md-6 col-sm-12">
                                                                            <nko-label value="'PAGE_PRODUCT.NEW.BARCODE'"
                                                                                class="ng-isolate-scope"><label
                                                                                    class="minotaur-label ">Barkod</label>
                                                                                <!-- ngIf: isOptional --><!-- ngIf: isRequired --></nko-label><nko-input
                                                                                name="barcode"
                                                                                ng-model="filterData.barcode"
                                                                                class="ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty"><input
                                                                                    type="text" name="name"
                                                                                    ng-model="ngModel"
                                                                                    ng-change="ngChange()"
                                                                                    ng-disabled="ngDisabled"
                                                                                    class="form-control  ng-valid ng-valid-required"
                                                                                    minlength="" maxlength=""
                                                                                    ng-required="ngRequired"
                                                                                    autocomplete="" input-mask=""
                                                                                    mask-options="{ 'regex': regexStr, 'placeholder': '' }"></nko-input><nko-warning
                                                                                form="accountInfoForm" field="barcode"
                                                                                class="ng-isolate-scope"><!-- ngIf: ifExists === false || form[field].$dirty --></nko-warning>
                                                                        </div>
                                                                        <!--ORIGIN--><!-- ngIf: 'service' !== filterData.type -->
                                                                        <div class="form-group col-lg-4 col-md-6 col-sm-12 ng-scope"
                                                                            ng-if="'service' !== filterData.type">
                                                                            <nko-label value="'PAGE_PRODUCT.NEW.ORIGIN'"
                                                                                class="ng-isolate-scope"><label
                                                                                    class="minotaur-label ">Menşei</label>
                                                                                <!-- ngIf: isOptional --><!-- ngIf: isRequired --></nko-label><nko-input
                                                                                name="origin"
                                                                                ng-model="filterData.origin"
                                                                                class="ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty"><input
                                                                                    type="text" name="name"
                                                                                    ng-model="ngModel"
                                                                                    ng-change="ngChange()"
                                                                                    ng-disabled="ngDisabled"
                                                                                    class="form-control  ng-valid ng-valid-required"
                                                                                    minlength="" maxlength=""
                                                                                    ng-required="ngRequired"
                                                                                    autocomplete="" input-mask=""
                                                                                    mask-options="{ 'regex': regexStr, 'placeholder': '' }"></nko-input><nko-warning
                                                                                form="accountInfoForm" field="origin"
                                                                                class="ng-isolate-scope"><!-- ngIf: ifExists === false || form[field].$dirty --></nko-warning>
                                                                        </div>
                                                                        <!-- end ngIf: 'service' !== filterData.type --><!--TAGS-->
                                                                        <div
                                                                            class="form-group col-lg-4 col-md-6 col-sm-12">
                                                                            <nko-label value="'DIRECTIVES.NKO_TAG.HEADER'"
                                                                                class="ng-isolate-scope"><label
                                                                                    class="minotaur-label ">Etiketler</label>
                                                                                <!-- ngIf: isOptional --><!-- ngIf: isRequired --></nko-label><nko-select-multiple
                                                                                tagging="" name="tags"
                                                                                filter="{group:'Product'}"
                                                                                ng-model="filterData.tags"
                                                                                class="ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty">
                                                                                <div class="ui-select-container ui-select-multiple ui-select-bootstrap dropdown form-control ng-empty ng-valid"
                                                                                    ng-class="{open: $select.open}"
                                                                                    tagging="transformTag"
                                                                                    tagging-label="(Yeni Etiket)"
                                                                                    name="$parent.name"
                                                                                    ng-model="$parent.ngModel"
                                                                                    ng-disabled="ngDisabled"
                                                                                    close-on-select="false">
                                                                                    <div><span
                                                                                            class="ui-select-match ng-scope"><!-- ngRepeat: $item in $select.selected track by $index --></span><input
                                                                                            type="search"
                                                                                            autocomplete="off"
                                                                                            autocorrect="off"
                                                                                            autocapitalize="off"
                                                                                            spellcheck="false"
                                                                                            class="ui-select-search input-xs ng-pristine ng-untouched ng-valid ng-empty"
                                                                                            placeholder=""
                                                                                            ng-disabled="$select.disabled"
                                                                                            ng-click="$select.activate()"
                                                                                            ng-model="$select.search"
                                                                                            role="combobox"
                                                                                            aria-expanded="false"
                                                                                            aria-label="Select box"
                                                                                            ng-class="{'spinner': $select.refreshing}"
                                                                                            ondrop="return false;"
                                                                                            aria-activedescendant="ui-select-choices-row-128--1"
                                                                                            style="width: 10px;"></div>
                                                                                    <ul class="ui-select-choices ui-select-choices-content ui-select-dropdown dropdown-menu ng-scope ng-hide"
                                                                                        ng-show="$select.open &amp;&amp; $select.items.length > 0"
                                                                                        repeat="item in (items | orderBy: orderBy | filter: filter | searchUpperCase: $select.search) | limitTo:visibleItemCount"
                                                                                        scroll-detector="loadMore()"
                                                                                        group-by="groupBy">
                                                                                        <!-- ngRepeat: $group in $select.groups track by $group.name -->
                                                                                    </ul>
                                                                                    <div class="ui-select-no-choice"></div>
                                                                                    <ui-select-multiple></ui-select-multiple>
                                                                                </div>
                                                                            </nko-select-multiple><nko-warning
                                                                                form="accountInfoForm" field="tags"
                                                                                class="ng-isolate-scope"><!-- ngIf: ifExists === false || form[field].$dirty --></nko-warning>
                                                                        </div><!--DESCRIPTION-->
                                                                        <div
                                                                            class="form-group col-lg-4 col-md-6 col-sm-12">
                                                                            <nko-label
                                                                                value="'PAGE_PRODUCT.NEW.DESCRIPTION'"
                                                                                class="ng-isolate-scope"><label
                                                                                    class="minotaur-label ">Açıklama</label>
                                                                                <!-- ngIf: isOptional --><!-- ngIf: isRequired --></nko-label><nko-input
                                                                                name="description"
                                                                                ng-model="filterData.description"
                                                                                class="ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty"><input
                                                                                    type="text" name="name"
                                                                                    ng-model="ngModel"
                                                                                    ng-change="ngChange()"
                                                                                    ng-disabled="ngDisabled"
                                                                                    class="form-control  ng-valid ng-valid-required"
                                                                                    minlength="" maxlength=""
                                                                                    ng-required="ngRequired"
                                                                                    autocomplete="" input-mask=""
                                                                                    mask-options="{ 'regex': regexStr, 'placeholder': '' }"></nko-input>
                                                                        </div><!--VAT_VALUES-->
                                                                        <div
                                                                            class="form-group col-lg-4 col-md-6 col-sm-12">
                                                                            <nko-label value="'TABLE.SEARCH.VAT'"
                                                                                class="ng-isolate-scope"><label
                                                                                    class="minotaur-label ">KDV</label>
                                                                                <!-- ngIf: isOptional --><!-- ngIf: isRequired --></nko-label><nko-select-multiple-tax
                                                                                name="vat_values"
                                                                                ng-model="filterData.tax_id"
                                                                                class="ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty">
                                                                                <div class="ui-select-container ui-select-multiple ui-select-bootstrap dropdown form-control ng-empty ng-valid ng-valid-required"
                                                                                    ng-class="{open: $select.open}"
                                                                                    limit="999" name="$parent.name"
                                                                                    ng-model="$parent.ngModel"
                                                                                    ng-disabled="ctrl.disabled"
                                                                                    ng-required=" "
                                                                                    close-on-select="false">
                                                                                    <div><span
                                                                                            class="ui-select-match ng-scope"><!-- ngRepeat: $item in $select.selected track by $index --></span><input
                                                                                            type="search"
                                                                                            autocomplete="off"
                                                                                            autocorrect="off"
                                                                                            autocapitalize="off"
                                                                                            spellcheck="false"
                                                                                            class="ui-select-search input-xs ng-pristine ng-untouched ng-valid ng-empty"
                                                                                            placeholder=""
                                                                                            ng-disabled="$select.disabled"
                                                                                            ng-click="$select.activate()"
                                                                                            ng-model="$select.search"
                                                                                            role="combobox"
                                                                                            aria-expanded="false"
                                                                                            aria-label="Select box"
                                                                                            ng-class="{'spinner': $select.refreshing}"
                                                                                            ondrop="return false;"
                                                                                            style="width: 10px;"></div>
                                                                                    <ul class="ui-select-choices ui-select-choices-content ui-select-dropdown dropdown-menu ng-scope ng-hide"
                                                                                        ng-show="$select.open &amp;&amp; $select.items.length > 0"
                                                                                        repeat="item[valueKey || 'id'] as item in (items | orderBy: orderBy | filter: filter | searchUpperCase: $select.search) | limitTo:visibleItemCount"
                                                                                        scroll-detector="loadMore()"
                                                                                        group-by="groupBy">
                                                                                        <!-- ngRepeat: $group in $select.groups track by $group.name -->
                                                                                        <li class="ui-select-choices-group ng-scope"
                                                                                            id="ui-select-choices-129"
                                                                                            ng-repeat="$group in $select.groups track by $group.name"
                                                                                            style="">
                                                                                            <div class="divider ng-hide"
                                                                                                ng-show="$select.isGrouped &amp;&amp; $index > 0">
                                                                                            </div>
                                                                                            <div ng-show="$select.isGrouped"
                                                                                                class="ui-select-choices-group-label dropdown-header ng-binding"
                                                                                                ng-bind="$group.name">
                                                                                            </div>
                                                                                            <!-- ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items -->
                                                                                        </li>
                                                                                        <!-- end ngRepeat: $group in $select.groups track by $group.name -->
                                                                                    </ul>
                                                                                    <div class="ui-select-no-choice"></div>
                                                                                    <ui-select-multiple></ui-select-multiple>
                                                                                </div>
                                                                            </nko-select-multiple-tax><nko-warning
                                                                                form="accountInfoForm" field="vat_values"
                                                                                class="ng-isolate-scope"><!-- ngIf: ifExists === false || form[field].$dirty --></nko-warning>
                                                                        </div>
                                                                    </div><!-- ngIf: 'service' !== filterData.type -->
                                                                    <div class="row ng-scope show"
                                                                        ng-if="'service' !== filterData.type"
                                                                        ng-class="'service' === filterData.type ? 'hide' : 'show'">
                                                                        <!--PURCHASE_UNIT-->

                                                                        <div
                                                                            class="form-group col-lg-4 col-md-6 col-sm-12">
                                                                            <nko-label value="'PAGE_PRODUCT.NEW.SALE_UNIT'"
                                                                                class="ng-isolate-scope"><label
                                                                                    class="minotaur-label ">Satış
                                                                                    Birimi</label>
                                                                                <!-- ngIf: isOptional --><!-- ngIf: isRequired --></nko-label><nko-select-multiple-unit
                                                                                name="sale_units"
                                                                                ng-model="filterData.sale_unit_input"
                                                                                class="ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty">
                                                                                <div class="ui-select-container ui-select-multiple ui-select-bootstrap dropdown form-control ng-pristine ng-untouched ng-scope ng-empty ng-valid ng-valid-required"
                                                                                    ng-class="{open: $select.open}"
                                                                                    limit="999" name="$parent.name"
                                                                                    ng-model="$parent.ngModel"
                                                                                    ng-disabled="ctrl.disabled"
                                                                                    ng-required=" "
                                                                                    close-on-select="false">
                                                                                    <div><span
                                                                                            class="ui-select-match ng-scope"><!-- ngRepeat: $item in $select.selected track by $index --></span><input
                                                                                            type="search"
                                                                                            autocomplete="off"
                                                                                            autocorrect="off"
                                                                                            autocapitalize="off"
                                                                                            spellcheck="false"
                                                                                            class="ui-select-search input-xs ng-pristine ng-untouched ng-valid ng-empty"
                                                                                            placeholder=""
                                                                                            ng-disabled="$select.disabled"
                                                                                            ng-click="$select.activate()"
                                                                                            ng-model="$select.search"
                                                                                            role="combobox"
                                                                                            aria-expanded="false"
                                                                                            aria-label="Select box"
                                                                                            ng-class="{'spinner': $select.refreshing}"
                                                                                            ondrop="return false;"
                                                                                            style="width: 10px;"></div>
                                                                                    <ul class="ui-select-choices ui-select-choices-content ui-select-dropdown dropdown-menu ng-scope ng-hide"
                                                                                        ng-show="$select.open &amp;&amp; $select.items.length > 0"
                                                                                        repeat="item[valueKey || 'id'] as item in (items | orderBy: orderBy | filter: filter | searchUpperCase: $select.search) | limitTo:visibleItemCount"
                                                                                        scroll-detector="loadMore()"
                                                                                        group-by="groupBy">
                                                                                        <!-- ngRepeat: $group in $select.groups track by $group.name -->
                                                                                        <li class="ui-select-choices-group ng-scope"
                                                                                            id="ui-select-choices-131"
                                                                                            ng-repeat="$group in $select.groups track by $group.name"
                                                                                            style="">
                                                                                            <div class="divider ng-hide"
                                                                                                ng-show="$select.isGrouped &amp;&amp; $index > 0">
                                                                                            </div>
                                                                                            <div ng-show="$select.isGrouped"
                                                                                                class="ui-select-choices-group-label dropdown-header ng-binding"
                                                                                                ng-bind="$group.name">
                                                                                                Uzunluk</div>
                                                                                            <!-- ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items -->
                                                                                        </li>
                                                                                        <!-- end ngRepeat: $group in $select.groups track by $group.name -->
                                                                                        <li class="ui-select-choices-group ng-scope"
                                                                                            id="ui-select-choices-131"
                                                                                            ng-repeat="$group in $select.groups track by $group.name">
                                                                                            <div class="divider"
                                                                                                ng-show="$select.isGrouped &amp;&amp; $index > 0">
                                                                                            </div>
                                                                                            <div ng-show="$select.isGrouped"
                                                                                                class="ui-select-choices-group-label dropdown-header ng-binding"
                                                                                                ng-bind="$group.name">Alan
                                                                                            </div>
                                                                                            <!-- ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items -->
                                                                                        </li>
                                                                                        <!-- end ngRepeat: $group in $select.groups track by $group.name -->
                                                                                        <li class="ui-select-choices-group ng-scope"
                                                                                            id="ui-select-choices-131"
                                                                                            ng-repeat="$group in $select.groups track by $group.name">
                                                                                            <div class="divider"
                                                                                                ng-show="$select.isGrouped &amp;&amp; $index > 0">
                                                                                            </div>
                                                                                            <div ng-show="$select.isGrouped"
                                                                                                class="ui-select-choices-group-label dropdown-header ng-binding"
                                                                                                ng-bind="$group.name">Hacim
                                                                                            </div>
                                                                                            <!-- ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items -->
                                                                                        </li>
                                                                                        <!-- end ngRepeat: $group in $select.groups track by $group.name -->
                                                                                        <li class="ui-select-choices-group ng-scope"
                                                                                            id="ui-select-choices-131"
                                                                                            ng-repeat="$group in $select.groups track by $group.name">
                                                                                            <div class="divider"
                                                                                                ng-show="$select.isGrouped &amp;&amp; $index > 0">
                                                                                            </div>
                                                                                            <div ng-show="$select.isGrouped"
                                                                                                class="ui-select-choices-group-label dropdown-header ng-binding"
                                                                                                ng-bind="$group.name">Kütle
                                                                                            </div>
                                                                                            <!-- ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items -->
                                                                                        </li>
                                                                                        <!-- end ngRepeat: $group in $select.groups track by $group.name -->
                                                                                    </ul>
                                                                                    <div class="ui-select-no-choice"></div>
                                                                                    <ui-select-multiple></ui-select-multiple>
                                                                                </div>
                                                                            </nko-select-multiple-unit>
                                                                        </div>
                                                                        <!--STOCK_UNIT-->
                                                                        <div
                                                                            class="form-group col-lg-4 col-md-6 col-sm-12">
                                                                            <nko-label
                                                                                value="'PAGE_PRODUCT.NEW.STOCK_UNIT'"
                                                                                class="ng-isolate-scope"><label
                                                                                    class="minotaur-label ">Stok Saklama
                                                                                    Birimi</label>
                                                                                <!-- ngIf: isOptional --><!-- ngIf: isRequired --></nko-label><nko-select-multiple-unit
                                                                                name="stock_units"
                                                                                ng-model="filterData.stock_unit_input"
                                                                                class="ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty">
                                                                                <div class="ui-select-container ui-select-multiple ui-select-bootstrap dropdown form-control ng-pristine ng-untouched ng-scope ng-empty ng-valid ng-valid-required"
                                                                                    ng-class="{open: $select.open}"
                                                                                    limit="999" name="$parent.name"
                                                                                    ng-model="$parent.ngModel"
                                                                                    ng-disabled="ctrl.disabled"
                                                                                    ng-required=" "
                                                                                    close-on-select="false">
                                                                                    <div><span
                                                                                            class="ui-select-match ng-scope"><!-- ngRepeat: $item in $select.selected track by $index --></span><input
                                                                                            type="search"
                                                                                            autocomplete="off"
                                                                                            autocorrect="off"
                                                                                            autocapitalize="off"
                                                                                            spellcheck="false"
                                                                                            class="ui-select-search input-xs ng-pristine ng-untouched ng-valid ng-empty"
                                                                                            placeholder=""
                                                                                            ng-disabled="$select.disabled"
                                                                                            ng-click="$select.activate()"
                                                                                            ng-model="$select.search"
                                                                                            role="combobox"
                                                                                            aria-expanded="false"
                                                                                            aria-label="Select box"
                                                                                            ng-class="{'spinner': $select.refreshing}"
                                                                                            ondrop="return false;"
                                                                                            style="width: 10px;"></div>
                                                                                    <ul class="ui-select-choices ui-select-choices-content ui-select-dropdown dropdown-menu ng-scope ng-hide"
                                                                                        ng-show="$select.open &amp;&amp; $select.items.length > 0"
                                                                                        repeat="item[valueKey || 'id'] as item in (items | orderBy: orderBy | filter: filter | searchUpperCase: $select.search) | limitTo:visibleItemCount"
                                                                                        scroll-detector="loadMore()"
                                                                                        group-by="groupBy">
                                                                                        <!-- ngRepeat: $group in $select.groups track by $group.name -->
                                                                                        <li class="ui-select-choices-group ng-scope"
                                                                                            id="ui-select-choices-132"
                                                                                            ng-repeat="$group in $select.groups track by $group.name"
                                                                                            style="">
                                                                                            <div class="divider ng-hide"
                                                                                                ng-show="$select.isGrouped &amp;&amp; $index > 0">
                                                                                            </div>
                                                                                            <div ng-show="$select.isGrouped"
                                                                                                class="ui-select-choices-group-label dropdown-header ng-binding"
                                                                                                ng-bind="$group.name">
                                                                                                Uzunluk</div>
                                                                                            <!-- ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items -->
                                                                                        </li>
                                                                                        <!-- end ngRepeat: $group in $select.groups track by $group.name -->
                                                                                        <li class="ui-select-choices-group ng-scope"
                                                                                            id="ui-select-choices-132"
                                                                                            ng-repeat="$group in $select.groups track by $group.name">
                                                                                            <div class="divider"
                                                                                                ng-show="$select.isGrouped &amp;&amp; $index > 0">
                                                                                            </div>
                                                                                            <div ng-show="$select.isGrouped"
                                                                                                class="ui-select-choices-group-label dropdown-header ng-binding"
                                                                                                ng-bind="$group.name">Alan
                                                                                            </div>
                                                                                            <!-- ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items -->
                                                                                        </li>
                                                                                        <!-- end ngRepeat: $group in $select.groups track by $group.name -->
                                                                                        <li class="ui-select-choices-group ng-scope"
                                                                                            id="ui-select-choices-132"
                                                                                            ng-repeat="$group in $select.groups track by $group.name">
                                                                                            <div class="divider"
                                                                                                ng-show="$select.isGrouped &amp;&amp; $index > 0">
                                                                                            </div>
                                                                                            <div ng-show="$select.isGrouped"
                                                                                                class="ui-select-choices-group-label dropdown-header ng-binding"
                                                                                                ng-bind="$group.name">Hacim
                                                                                            </div>
                                                                                            <!-- ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items -->
                                                                                        </li>
                                                                                        <!-- end ngRepeat: $group in $select.groups track by $group.name -->
                                                                                        <li class="ui-select-choices-group ng-scope"
                                                                                            id="ui-select-choices-132"
                                                                                            ng-repeat="$group in $select.groups track by $group.name">
                                                                                            <div class="divider"
                                                                                                ng-show="$select.isGrouped &amp;&amp; $index > 0">
                                                                                            </div>
                                                                                            <div ng-show="$select.isGrouped"
                                                                                                class="ui-select-choices-group-label dropdown-header ng-binding"
                                                                                                ng-bind="$group.name">Kütle
                                                                                            </div>
                                                                                            <!-- ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $group.items -->
                                                                                        </li>
                                                                                        <!-- end ngRepeat: $group in $select.groups track by $group.name -->
                                                                                    </ul>
                                                                                    <div class="ui-select-no-choice"></div>
                                                                                    <ui-select-multiple></ui-select-multiple>
                                                                                </div>
                                                                            </nko-select-multiple-unit>
                                                                        </div>
                                                                    </div><!-- end ngIf: 'service' !== filterData.type -->
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-lg-4 col-md-6"><nko-label
                                                                                value="'TABLE.SEARCH.PURCHASE_PRICE'"
                                                                                class="ng-isolate-scope"><label
                                                                                    class="minotaur-label ">Alış
                                                                                    Fiyatı</label>
                                                                                <!-- ngIf: isOptional --><!-- ngIf: isRequired --></nko-label>
                                                                            <div class="row">
                                                                                <div class="form-group col-md-6">
                                                                                    <!--MIN_PURCHASE_PRICE-->
                                                                                    <div class="input-group"><span
                                                                                            class="input-group-addon"><nko-label
                                                                                                value="'TABLE.SEARCH.MIN'"
                                                                                                label-class="text-gray"
                                                                                                class="ng-isolate-scope"><label
                                                                                                    class="minotaur-label text-gray">Min</label>
                                                                                                <!-- ngIf: isOptional --><!-- ngIf: isRequired --></nko-label></span><nko-numeric
                                                                                            id="minPurchasePrice"
                                                                                            type="currency"
                                                                                            currency-precision="false"
                                                                                            name="min_purchase_price"
                                                                                            ng-model="filterData.min_purchase_price"
                                                                                            lower-than=""
                                                                                            class="ng-pristine ng-untouched ng-valid ng-isolate-scope ng-valid-lower-than ng-empty"><input
                                                                                                type="text"
                                                                                                name="name"
                                                                                                ng-model="ngModel"
                                                                                                ng-change="ngChange()"
                                                                                                ng-disabled="ngDisabled"
                                                                                                ng-required="ngRequired"
                                                                                                ng-readonly=""
                                                                                                class="form-control currency ng-pristine ng-untouched ng-empty ng-valid ng-valid-required"
                                                                                                input-mask=""
                                                                                                mask-options="{ 'autoGroup': true,
                       'autoUnmask':true,
                       'digitsOptional': false,
                       'tabThrough': false,
                       'alias': type,
                       'prefix': prefix,
                       'suffix': suffix,
                       'groupSeparator': groupSeparator,
                       'radixPoint': decimalSeparator,
                       'digits': digits,
                       'min': min,
                       'max': max,
                       'placeholder': placeholder,
                       'onUnMask': onUnMask,
                       'onBeforeMask': onBeforeMask

                                                                                                style="text-align:
                                                                                                right;"></nko-numeric>
                                                                                    </div><nko-warning form="userForm"
                                                                                        field="max_discount_value"
                                                                                        class="ng-isolate-scope"><!-- ngIf: ifExists === false || form[field].$dirty --></nko-warning>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-15"><button type="button"
                                                                            class="btn btn-default"
                                                                            ng-click="searchProduct(userForm)"><i
                                                                                class="fa fa-search"></i> <span
                                                                                class="ng-binding">Getir</span></button>
                                                                        <button type="button" class="btn btn-default"
                                                                            ng-click="clearProductList(userForm, filterData.product_type)"><i
                                                                                class="fa fa-history"></i> <span
                                                                                class="ng-binding">Temizle ve
                                                                                Getir</span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                        </div>
                                    </div>
                                </div>


                                <div id="table_product_all_wrapper" class="dataTables_wrapper form-inline no-footer">
                                    <div class="dt-buttons btn-group"> <button class="btn btn-default bg-green"
                                            tabindex="0" aria-controls="table_product_all"
                                            type="button"><span>Ürün/Hizmet
                                                Oluştur</span></button>
                                    </div>

                                    <table class="table table-hover ng-isolate-scope dataTable no-footer dtr-column"
                                        datatable="" dt-instance="dtInstance" dt-options="dtOptions"
                                        dt-columns="dtColumns" id="table_product_all" style="display: table;"
                                        aria-describedby="table_product_all_info">
                                        <thead>
                                            <tr>
                                                <th class="sorting_disabled ng-scope" rowspan="1" colspan="1"
                                                    style="width: 5%;" aria-label=""></th>
                                                <th class="sorting ng-scope" tabindex="0"
                                                    aria-controls="table_product_all" rowspan="1" colspan="1"
                                                    style="width: 5%;"
                                                    aria-label="Tür: artan sütun sıralamasını aktifleştir">Tür</th>
                                                <th class="sorting ng-scope" tabindex="0"
                                                    aria-controls="table_product_all" rowspan="1" colspan="1"
                                                    aria-label="Barkod: artan sütun sıralamasını aktifleştir">Barkod
                                                </th>
                                                <th class="sorting ng-scope" tabindex="0"
                                                    aria-controls="table_product_all" rowspan="1" colspan="1"
                                                    aria-label="Kod: artan sütun sıralamasını aktifleştir">Kod</th>
                                                <th class="sorting ng-scope" tabindex="0"
                                                    aria-controls="table_product_all" rowspan="1" colspan="1"
                                                    aria-label="Ad: artan sütun sıralamasını aktifleştir">Ad</th>
                                                <th class="sorting ng-scope" tabindex="0"
                                                    aria-controls="table_product_all" rowspan="1" colspan="1"
                                                    aria-label="Stok Kullanım: artan sütun sıralamasını aktifleştir">
                                                    Stok Kullanım
                                                </th>
                                                <th class="sorting ng-scope" tabindex="0"
                                                    aria-controls="table_product_all" rowspan="1" colspan="1"
                                                    aria-label="Etiketler: artan sütun sıralamasını aktifleştir">
                                                    Etiketler</th>
                                                <th class="sorting ng-scope" tabindex="0"
                                                    aria-controls="table_product_all" rowspan="1" colspan="1"
                                                    aria-label="KDV: artan sütun sıralamasını aktifleştir">KDV</th>
                                                <th class="dt-body-right sorting ng-scope" tabindex="0"
                                                    aria-controls="table_product_all" rowspan="1" colspan="1"
                                                    aria-label="Menşei: artan sütun sıralamasını aktifleştir">Menşei
                                                </th>
                                                <th class="dt-body-right sorting ng-scope" tabindex="0"
                                                    aria-controls="table_product_all" rowspan="1" colspan="1"
                                                    aria-label="Açıklama: artan sütun sıralamasını aktifleştir">
                                                    Açıklama</th>
                                                <th class="sorting ng-scope" tabindex="0"
                                                    aria-controls="table_product_all" rowspan="1" colspan="1"
                                                    aria-label="Kalan Stok Miktarı: artan sütun sıralamasını aktifleştir">
                                                    Kalan
                                                    Stok Miktarı</th>
                                                <th class="sorting ng-scope" tabindex="0"
                                                    aria-controls="table_product_all" rowspan="1" colspan="1"
                                                    aria-label="Stok Durumu: artan sütun sıralamasını aktifleştir">Stok
                                                    Durumu
                                                </th>
                                                <th class="sorting ng-scope" tabindex="0"
                                                    aria-controls="table_product_all" rowspan="1" colspan="1"
                                                    aria-label="Toplam Çıkış Bakiye: artan sütun sıralamasını aktifleştir">
                                                    Toplam
                                                    Çıkış Bakiye</th>
                                                <th class="sorting ng-scope" tabindex="0"
                                                    aria-controls="table_product_all" rowspan="1" colspan="1"
                                                    aria-label="Toplam Giriş Bakiye: artan sütun sıralamasını aktifleştir">
                                                    Toplam
                                                    Giriş Bakiye</th>
                                                <th class="sorting ng-scope" tabindex="0"
                                                    aria-controls="table_product_all" rowspan="1" colspan="1"
                                                    aria-label="Ortalama Birim Maliyet: artan sütun sıralamasını aktifleştir">
                                                    Ortalama Birim Maliyet</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd">
                                                <td valign="top" colspan="15" class="dataTables_empty">Tabloda
                                                    herhangi
                                                    bir veri mevcut değil</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="text-center">
                                        <div class="dataTables_info" id="table_product_all_info" role="status"
                                            aria-live="polite">Kayıt yok</div>
                                    </div>

                                </div>
                                </nko-table>
                </section>
            </div>
        </div>
    </div>
@endsection
