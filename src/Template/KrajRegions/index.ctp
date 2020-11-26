<?php
echo $this->Html->script([
    'https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js'
        ], ['block' => 'scriptLibraries']
);
$urlToRestApi = $this->Url->build([
    'prefix' => 'api',
    'controller' => 'KrajRegions'], true);
echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
echo $this->Html->script('KrajRegions/index', ['block' => 'scriptBottom']);
?>

<div  ng-app="app" ng-controller="KrajRegionCRUDCtrl">
    <table>
        <tr>
            <td width="100">ID:</td>
            <td><input type="text" id="id" ng-model="krajRegion.id" /></td>
        </tr>
        <tr>
            <td width="100">Name (nazev):</td>
            <td><input type="text" id="nazev" ng-model="krajRegion.nazev" /></td>
        </tr>
        <tr>
            <td width="100">Code (kod):</td>
            <td><input type="text" id="kod" ng-model="krajRegion.kod" /></td>
        </tr>
    </table>
    <br /> <br /> 
    <a ng-click="getKrajRegion(krajRegion.id)">Get KrajRegion</a> 
    <a ng-click="updateKrajRegion(krajRegion.id, krajRegion.nazev, krajRegion.kod)">Update KrajRegion</a> 
    <a ng-click="addKrajRegion(krajRegion.nazev, krajRegion.kod)">Add KrajRegion</a> 
    <a ng-click="deleteKrajRegion(krajRegion.id)">Delete KrajRegion</a>

    <br /> <br />
    <p style="color: green">{{message}}</p>
    <p style="color: red">{{errorMessage}}</p>

    <br />
    <br /> 
    <a ng-click="getAllKrajRegions()">Get all KrajRegions</a><br /> 
    <br /> <br />
    <div ng-repeat="krajRegion in krajRegions">
        {{krajRegion.id}} {{krajRegion.nazev}} {{krajRegion.kod}}
    </div>
    <!-- pre ng-show='krajRegions'>{{krajRegions | json }}</pre-->
</div>

