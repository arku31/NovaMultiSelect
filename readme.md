1. Put all this files in YOUPROJECT/nova-components/Multiselect

2. Add in your composer.json

```{
               "type": "path",
               "url": "./nova-components/Multiselect"
   }
```

3. Edit your Nova resource fields method

3.1 Get your data first to the numeric array (key => value)

3.2 Get your selected options in the seperated array (only keys)

```
$data = getSomeData();
$selectedOptions = getSelectedOptions();
```


3.3 Create a multiselect Field. Don't forget to import Nova\Multiselect\Multiselect.

Pass to the make method two params - human view name and database field to store it. Database field must be able to save text (json).

Pass as options your data and selected options

```
return [
    Multiselect::make('HUMAN_VIEW_NAME', 'DATABASE_FIELD_NAME')->options($data, $selectedOptions),
]
```


