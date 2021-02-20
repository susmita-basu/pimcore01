<?php 

/** 
* Inheritance: no
* Variants: no


Fields Summary: 
- userss [user]
- externalImage [externalImage]
- advanceIma [hotspotimage]
- advanceManyToMany [advancedManyToManyRelation]
- advanceManyObject [advancedManyToManyObjectRelation]
- reverseManyToMany [reverseManyToManyObjectRelation]
- geographicPoint [geopoint]
- geographicBounds [geobounds]
- geographicPolyline [geopolyline]
- consentt [consent]
- gender [gender]
- newsletterActive [newsletterActive]
- newsletterConfirmed [newsletterConfirmed]
- targetGroup [targetGroup]
- classificationStore [classificationstore]
- tables [table]
- structuredTable [structuredTable]
- fieldCollections [fieldcollections]
- encrypt [encryptedField]
- urlSlug [urlSlug]
- links [link]
*/ 


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'id' => '6',
   'name' => 'test',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1613396677,
   'userOwner' => 2,
   'userModification' => 2,
   'parentClass' => '',
   'implementsInterfaces' => '',
   'listingParentClass' => '',
   'useTraits' => '',
   'listingUseTraits' => '',
   'encryption' => false,
   'encryptedTables' => 
  array (
  ),
   'allowInherit' => false,
   'allowVariants' => NULL,
   'showVariants' => false,
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'fieldtype' => 'panel',
     'labelWidth' => 100,
     'layout' => NULL,
     'border' => false,
     'name' => 'pimcore_root',
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => NULL,
     'height' => NULL,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'childs' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
         'fieldtype' => 'panel',
         'labelWidth' => 100,
         'layout' => NULL,
         'border' => false,
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => '',
         'width' => NULL,
         'height' => NULL,
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'childs' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\User::__set_state(array(
             'fieldtype' => 'user',
             'unique' => false,
             'options' => 
            array (
              0 => 
              array (
                'value' => 2,
                'key' => 'admin',
              ),
              1 => 
              array (
                'value' => 4,
                'key' => 'manager (Archita Basu)',
              ),
            ),
             'width' => '',
             'defaultValue' => NULL,
             'optionsProviderClass' => NULL,
             'optionsProviderData' => NULL,
             'queryColumnType' => 'varchar',
             'columnType' => 'varchar',
             'columnLength' => 190,
             'phpdocType' => 'string',
             'dynamicOptions' => false,
             'name' => 'userss',
             'title' => 'userss',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'defaultValueGenerator' => '',
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\ExternalImage::__set_state(array(
             'fieldtype' => 'externalImage',
             'previewWidth' => '',
             'inputWidth' => '',
             'previewHeight' => '',
             'queryColumnType' => 'longtext',
             'columnType' => 'longtext',
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ExternalImage',
             'name' => 'externalImage',
             'title' => 'External Image',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Hotspotimage::__set_state(array(
             'fieldtype' => 'hotspotimage',
             'queryColumnType' => 
            array (
              'image' => 'int(11)',
              'hotspots' => 'text',
            ),
             'columnType' => 
            array (
              'image' => 'int(11)',
              'hotspots' => 'text',
            ),
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\Hotspotimage',
             'ratioX' => NULL,
             'ratioY' => NULL,
             'predefinedDataTemplates' => '',
             'width' => '',
             'height' => '',
             'uploadPath' => '',
             'name' => 'advanceIma',
             'title' => 'advanceImage',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyRelation::__set_state(array(
             'columns' => 
            array (
              0 => 
              array (
                'type' => 'text',
                'position' => 1,
                'key' => 'name',
                'id' => 'extModel9154-1',
                'label' => 'test',
              ),
              1 => 
              array (
                'type' => 'number',
                'position' => 2,
                'key' => 'name',
                'id' => 'extModel9154-2',
                'label' => 'test1',
                'width' => NULL,
              ),
            ),
             'columnKeys' => 
            array (
              0 => 'name',
              1 => 'name',
            ),
             'fieldtype' => 'advancedManyToManyRelation',
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ElementMetadata[]',
             'optimizedAdminLoading' => false,
             'enableBatchEdit' => false,
             'allowMultipleAssignments' => false,
             'width' => '',
             'height' => '',
             'maxItems' => '',
             'assetUploadPath' => '',
             'queryColumnType' => 'text',
             'relationType' => true,
             'objectsAllowed' => true,
             'assetsAllowed' => false,
             'assetTypes' => 
            array (
            ),
             'documentsAllowed' => false,
             'documentTypes' => 
            array (
            ),
             'classes' => 
            array (
              0 => 
              array (
                'classes' => 'brand',
              ),
            ),
             'pathFormatterClass' => '',
             'name' => 'advanceManyToMany',
             'title' => 'Advance Many To Many',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          4 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyObjectRelation::__set_state(array(
             'allowedClassId' => 'fabric',
             'visibleFields' => 'description',
             'columns' => 
            array (
              0 => 
              array (
                'type' => 'text',
                'position' => 1,
                'key' => 'name',
                'id' => 'extModel10901-1',
                'label' => 'test',
                'value' => 'abcdef',
              ),
              1 => 
              array (
                'type' => 'multiselect',
                'position' => 2,
                'key' => 'name',
                'id' => 'extModel10901-2',
                'label' => 'test1',
                'value' => 'abcd, efgh',
              ),
            ),
             'columnKeys' => 
            array (
              0 => 'name',
              1 => 'name',
            ),
             'fieldtype' => 'advancedManyToManyObjectRelation',
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ObjectMetadata[]',
             'enableBatchEdit' => false,
             'allowMultipleAssignments' => false,
             'visibleFieldDefinitions' => 
            array (
            ),
             'width' => '',
             'height' => '',
             'maxItems' => '',
             'queryColumnType' => 'text',
             'relationType' => true,
             'allowToCreateNewObject' => true,
             'optimizedAdminLoading' => false,
             'classes' => 
            array (
            ),
             'pathFormatterClass' => '',
             'name' => 'advanceManyObject',
             'title' => 'advanceManyObject',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          5 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\ReverseManyToManyObjectRelation::__set_state(array(
             'fieldtype' => 'reverseManyToManyObjectRelation',
             'ownerClassName' => 'category',
             'ownerClassId' => NULL,
             'ownerFieldName' => NULL,
             'lazyLoading' => true,
             'width' => '',
             'height' => '',
             'maxItems' => '',
             'queryColumnType' => 'text',
             'phpdocType' => 'array',
             'relationType' => true,
             'visibleFields' => NULL,
             'allowToCreateNewObject' => true,
             'optimizedAdminLoading' => false,
             'visibleFieldDefinitions' => 
            array (
            ),
             'classes' => 
            array (
            ),
             'pathFormatterClass' => '',
             'name' => 'reverseManyToMany',
             'title' => 'reverseManyToMany',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          6 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Geopoint::__set_state(array(
             'fieldtype' => 'geopoint',
             'queryColumnType' => 
            array (
              'longitude' => 'double',
              'latitude' => 'double',
            ),
             'columnType' => 
            array (
              'longitude' => 'double',
              'latitude' => 'double',
            ),
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\Geopoint',
             'lat' => 0.0,
             'lng' => 0.0,
             'zoom' => 1,
             'width' => NULL,
             'height' => NULL,
             'mapType' => 'roadmap',
             'name' => 'geographicPoint',
             'title' => 'geographicPoint',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          7 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Geobounds::__set_state(array(
             'fieldtype' => 'geobounds',
             'queryColumnType' => 
            array (
              'NElongitude' => 'double',
              'NElatitude' => 'double',
              'SWlongitude' => 'double',
              'SWlatitude' => 'double',
            ),
             'columnType' => 
            array (
              'NElongitude' => 'double',
              'NElatitude' => 'double',
              'SWlongitude' => 'double',
              'SWlatitude' => 'double',
            ),
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\Geobounds',
             'lat' => 0.0,
             'lng' => 0.0,
             'zoom' => 1,
             'width' => NULL,
             'height' => NULL,
             'mapType' => 'roadmap',
             'name' => 'geographicBounds',
             'title' => 'GeographicBounds',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          8 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Geopolyline::__set_state(array(
             'fieldtype' => 'geopolyline',
             'queryColumnType' => 'longtext',
             'columnType' => 'longtext',
             'phpdocType' => 'array',
             'lat' => 0.0,
             'lng' => 0.0,
             'zoom' => 1,
             'width' => NULL,
             'height' => NULL,
             'mapType' => 'roadmap',
             'name' => 'geographicPolyline',
             'title' => 'GeographicPolyline',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          9 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Consent::__set_state(array(
             'fieldtype' => 'consent',
             'defaultValue' => 0,
             'queryColumnType' => 'tinyint(1)',
             'columnType' => 
            array (
              'consent' => 'tinyint(1)',
              'note' => 'int(11)',
            ),
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\Consent',
             'width' => NULL,
             'name' => 'consentt',
             'title' => 'Consentt',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          10 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Gender::__set_state(array(
             'fieldtype' => 'gender',
             'options' => 
            array (
              0 => 
              array (
                'key' => 'male',
                'value' => 'male',
              ),
              1 => 
              array (
                'key' => 'female',
                'value' => 'female',
              ),
              2 => 
              array (
                'key' => 'other',
                'value' => 'other',
              ),
              3 => 
              array (
                'key' => '',
                'value' => 'unknown',
              ),
            ),
             'width' => '',
             'defaultValue' => NULL,
             'optionsProviderClass' => NULL,
             'optionsProviderData' => NULL,
             'queryColumnType' => 'varchar',
             'columnType' => 'varchar',
             'columnLength' => 190,
             'phpdocType' => 'string',
             'dynamicOptions' => false,
             'name' => 'gender',
             'title' => 'Gender',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'defaultValueGenerator' => '',
          )),
          11 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\NewsletterActive::__set_state(array(
             'fieldtype' => 'newsletterActive',
             'defaultValue' => NULL,
             'queryColumnType' => 'tinyint(1)',
             'columnType' => 'tinyint(1)',
             'phpdocType' => 'bool',
             'name' => 'newsletterActive',
             'title' => 'Newsletter Active',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'defaultValueGenerator' => '',
          )),
          12 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\NewsletterConfirmed::__set_state(array(
             'fieldtype' => 'newsletterConfirmed',
             'defaultValue' => NULL,
             'queryColumnType' => 'tinyint(1)',
             'columnType' => 'tinyint(1)',
             'phpdocType' => 'bool',
             'name' => 'newsletterConfirmed',
             'title' => 'Newsletter Confirmed',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => true,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'defaultValueGenerator' => '',
          )),
          13 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\TargetGroup::__set_state(array(
             'fieldtype' => 'targetGroup',
             'options' => 
            array (
            ),
             'width' => '',
             'defaultValue' => NULL,
             'optionsProviderClass' => NULL,
             'optionsProviderData' => NULL,
             'queryColumnType' => 'varchar',
             'columnType' => 'varchar',
             'columnLength' => 190,
             'phpdocType' => 'string',
             'dynamicOptions' => false,
             'name' => 'targetGroup',
             'title' => 'Target Group',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'defaultValueGenerator' => '',
          )),
          14 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Classificationstore::__set_state(array(
             'fieldtype' => 'classificationstore',
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Classificationstore',
             'childs' => 
            array (
            ),
             'name' => 'classificationStore',
             'region' => NULL,
             'layout' => NULL,
             'title' => 'classificationStore',
             'width' => '',
             'height' => '',
             'maxTabs' => NULL,
             'labelWidth' => 0,
             'localized' => true,
             'storeId' => '1',
             'hideEmptyData' => false,
             'disallowAddRemove' => false,
             'referencedFields' => 
            array (
            ),
             'fieldDefinitionsCache' => NULL,
             'allowedGroupIds' => 
            array (
            ),
             'activeGroupDefinitions' => 
            array (
            ),
             'maxItems' => 2,
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          15 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Table::__set_state(array(
             'fieldtype' => 'table',
             'width' => '',
             'height' => '',
             'cols' => 3,
             'colsFixed' => false,
             'rows' => 3,
             'rowsFixed' => false,
             'data' => '1 | 2 | 3
4 | 5 | 6
7| 8|9',
             'columnConfigActivated' => false,
             'columnConfig' => 
            array (
            ),
             'queryColumnType' => 'longtext',
             'columnType' => 'longtext',
             'phpdocType' => 'array|string',
             'name' => 'tables',
             'title' => 'tables',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          16 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\StructuredTable::__set_state(array(
             'fieldtype' => 'structuredTable',
             'width' => '',
             'height' => '',
             'labelWidth' => NULL,
             'labelFirstCell' => '',
             'cols' => 
            array (
              0 => 
              array (
                'position' => 1,
                'key' => '',
                'label' => '',
                'type' => 'text',
                'id' => 'extModel17195-1',
              ),
              1 => 
              array (
                'type' => 'text',
                'position' => 2,
                'id' => 'extModel17195-2',
                'key' => '',
              ),
              2 => 
              array (
                'type' => 'text',
                'position' => 3,
                'id' => 'extModel17195-3',
                'key' => '',
              ),
              3 => 
              array (
                'type' => 'text',
                'position' => 4,
                'id' => 'extModel17195-4',
                'key' => '',
              ),
            ),
             'rows' => 
            array (
              0 => 
              array (
                'position' => 1,
                'key' => '',
                'label' => '',
                'id' => 'extModel17171-1',
              ),
              1 => 
              array (
                'position' => 2,
                'id' => 'extModel17171-2',
                'key' => '',
              ),
              2 => 
              array (
                'position' => 3,
                'id' => 'extModel17171-3',
                'key' => '',
              ),
              3 => 
              array (
                'position' => 4,
                'id' => 'extModel17171-4',
                'key' => '',
              ),
            ),
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\StructuredTable',
             'name' => 'structuredTable',
             'title' => 'structuredTable',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          17 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Fieldcollections::__set_state(array(
             'fieldtype' => 'fieldcollections',
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Fieldcollection',
             'allowedTypes' => 
            array (
              0 => 'fieldColl',
            ),
             'lazyLoading' => true,
             'maxItems' => 10,
             'disallowAddRemove' => false,
             'disallowReorder' => false,
             'collapsed' => false,
             'collapsible' => false,
             'border' => false,
             'name' => 'fieldCollections',
             'title' => 'FieldCollections',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          18 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\EncryptedField::__set_state(array(
             'fieldtype' => 'encryptedField',
             'delegateDatatype' => 'input',
             'delegate' => 
            Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
               'fieldtype' => 'input',
               'width' => NULL,
               'defaultValue' => NULL,
               'queryColumnType' => 'varchar',
               'columnType' => 'LONGBLOB',
               'columnLength' => 190,
               'phpdocType' => 'string',
               'regex' => '',
               'unique' => NULL,
               'showCharCount' => NULL,
               'name' => 'encrypt',
               'title' => 'encrypt',
               'tooltip' => '',
               'mandatory' => false,
               'noteditable' => false,
               'index' => false,
               'locked' => false,
               'style' => '',
               'permissions' => NULL,
               'datatype' => 'data',
               'relationType' => false,
               'invisible' => false,
               'visibleGridView' => false,
               'visibleSearch' => false,
               'defaultValueGenerator' => '',
            )),
             'columnType' => 'LONGBLOB',
             'phpdocType' => NULL,
             'name' => 'encrypt',
             'title' => 'encrypt',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          19 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\UrlSlug::__set_state(array(
             'fieldtype' => 'urlSlug',
             'width' => NULL,
             'domainLabelWidth' => NULL,
             'action' => '',
             'availableSites' => 
            array (
            ),
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\UrlSlug[]',
             'name' => 'urlSlug',
             'title' => 'urlSlug',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          20 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Link::__set_state(array(
             'fieldtype' => 'link',
             'queryColumnType' => 'text',
             'columnType' => 'text',
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\Link',
             'name' => 'links',
             'title' => 'links',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
        ),
         'locked' => false,
         'icon' => '',
      )),
    ),
     'locked' => false,
     'icon' => NULL,
  )),
   'icon' => '',
   'previewUrl' => '',
   'group' => '',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => '',
   'compositeIndices' => 
  array (
  ),
   'generateTypeDeclarations' => false,
   'showFieldLookup' => false,
   'propertyVisibility' => 
  array (
    'grid' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
    'search' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
  ),
   'enableGridLocking' => false,
   'dao' => NULL,
));
