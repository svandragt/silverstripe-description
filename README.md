silverstripe-description
========================

Takes form field descriptions through $db_descriptions and shows them in the edit form.

## Usage


1. Install using composer `composer require "svandragt/silverstripe-description:*"` 
2. Attach it to your data objects / page types through the configuration system as follows:
 
```
Object::add_extension("DataObject","DescriptionDataExtension");
```

## DIY Demo:

Course.php:

    <?php
    class Course extends DataObject {
    	public static $db = array(
    		'Title'             => 'Varchar(500)',
    		'IPPCode'           => 'Varchar(20)',
    	);
    
    	public static $db_descriptions = array(
    		'IPPCode'           => 'Lookup to existing IPP Code if available',
    	);    
    }

CourseModelAdmin.php:

    <?php
    
    class CourseModelAdmin extends ModelAdmin {
    	public static $managed_models = array(
    		'Course',
    	); 
      	static $url_segment = 'courses'; // Linked as /admin/products/
      	static $menu_title = 'Course Admin';
    	
    }

Do a /dev/build and create a new course in the CMS. You will see the IPPCode field has a description below it.


## Screenshot

![Example screenshot](http://content.screencast.com/users/SanderVD/folders/Jing/media/c66ae9b9-d681-4940-adbd-71773d110d54/2012-11-20_1340.png)

1. Unsaved message provided through [ManyMessageDataExtension](https://github.com/svandragt/silverstripe-manymessage)
2. Styling for required formfields provided through [RequiredFieldsCmsDataExtension](https://github.com/svandragt/silverstripe-requiredfieldscms)
3. Field descriptions automatically linked through [DescriptionDataExtension](https://github.com/svandragt/silverstripe-description)
