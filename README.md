# Asana for Laravel

[![Latest Stable Version](https://poser.pugx.org/torann/laravel-asana/v/stable.png)](https://packagist.org/packages/torann/laravel-asana) [![Total Downloads](https://poser.pugx.org/torann/laravel-asana/downloads.png)](https://packagist.org/packages/torann/laravel-asana)

----------

## Installation

- [Laravel Asana on Packagist](https://packagist.org/packages/torann/laravel-asana)
- [Laravel Asana on GitHub](https://github.com/torann/laravel-asana)

To get the latest version of Laravel Asana simply require it in your `composer.json` file.

~~~
"torann/laravel-asana": "0.1.*@dev"
~~~

You'll then need to run `composer install` to download it and have the autoloader updated.

### Create configuration file using artisan

```
$ php artisan config:publish torann/laravel-asana
```

Now add Asana in your providers array `app/config/app.php`

~~~
'Torann\LaravelAsana\ServiceProvider'
~~~

## Quick Examples


#### Get a specific user

```php
Asana::getUserInfo($user_id);
```

#### Get current user

Will return the user's info of the owner of the API key.

```php
Asana::getCurrentUser();
```

#### Get all users in all workspaces

Will return the user's info of the owner of the API key.

```php
Asana::getUsers();
```

#### Get task

```php
Asana::getTask($task_id);
```

#### Get a task's sub-tasks

```php
Asana::getSubTasks($task_id);
```

#### Creating a task

```php
Asana::createTask(array(
   'workspace' => '176825', // Workspace ID
   'name'      => 'Hello World!', // Name of task
   'assignee'  => 'foo@bar.com', // Assign task to...
   'followers' => array('3714136', '5900783') // We add some followers to the task... (this time by ID)
));
```

#### Adding task to project

```php
Asana::addProjectToTask($task_id, $project_id);
```

#### Remove task from a project

```php
Asana::removeProjectToTask($task_id, $project_id);
```

#### Get task stories

```php
Asana::getTaskStories($task_id);
```

#### Commenting on a task

```php
Asana::commentOnTask($task_id, "Please please! Don't assign me this task!");
```

#### Add a tag to a task

```php
Asana::addTagToTask($task_id, $tag_id);
```

#### Remove a tag from a task

```php
Asana::removeTagFromTask($task_id, $tag_id);
```

#### Create a project

```php
Asana::createProject(array(
    "workspace" => "1768",
    "name"      => "Foo Project!",
    "notes"     => "This is a test project"
));
```

#### Getting projects in all workspaces

```php
Asana::getProjects();
```

#### Get projects in a workspace

```php
$archived = false;

Asana::getProjectsInWorkspace($workspace_id, $archived);
```

#### Updating project info

```php
Asana::updateProject($project_id, array(
    'name' => 'This is a new cool project!',
    'notes' => 'At first, it wasn't cool, but after this name change, it is!'
));
```

#### Get project tasks

```php
Asana::getProjectTasks($project_id);
```

#### Get project stories

```php
Asana::getProjectStories($project_id);
```

#### Get a specific story

```php
Asana::getSingleStory($story_id);
```

#### Comment on a project

```php
$text = "Such fun!";

Asana::commentOnProject($project_id, $text)
```

#### Get a specific tag

```php
Asana::getTag($tag_id);
```

#### Get tags

```php
Asana::getTags();
```

#### Update tag

```php
// $data - array - An array containing fields to update, see Asana API if needed.

Asana::updateTag($tag_id, $data);
```

#### Get tasks with tag

```php
Asana::getTasksWithTag($tag_id);
```

#### Get workspaces

```php
Asana::getWorkspaces();
```

#### Update workspace

```php
$data = array('name' => '');

Asana::updateWorkspace($workspace_i, $data);
```

#### Get workspace tasks

```php
// Assignee can either be 'me' or a user's ID

Asana::getWorkspaceTasks($workspace_id, $assignee);
```

#### Get workspace tags

```php
Asana::getWorkspaceTags($workspace_id);
```

#### Get workspace users

```php
Asana::getWorkspaceUsers($workspace_id);
```

#### Filtering

If you specify an assignee, you must also specify a workspace to filter on.

```php
Asana::getTasksByFilter(array(
    'assignee'  => 1121,
    'project'   => 37373729,
    'workspace' => 111221
));
```
# expedia
