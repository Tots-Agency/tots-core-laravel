# Tots Core Library - Laravel

This version only includes 'SuccessResource' for reuse, so it doesn't need to be created within the project. It also includes 'TotsException' to generalize API errors.

## 💻 Install

* Open composer.json
* Copy "repositories"
```json 
"repositories": [
    {
        "type": "git",
        "url": "https://github.com/tots-agency/tots-core-laravel.git"
    }
]
```
* Add require
```json 
"require": {
    "php": "^8.1",
    "laravel/framework": "^10.10",
    "tots/core-laravel": "dev-main",
    ...
},
```

## Use SuccessResource

```php
public function store(Request $request)
{
    // Your code
    return response()->json(SuccessResource::make('success'));
}
```

## Use TotsException

```php
public function social(Request $request)
{
    // Your Code

    // Add validation example
    if($user->status == TotsUser::STATUS_SUSPENDED){
        throw new TotsException('Your account is suspended, please contact the administrator.', 'suspended', 400);
    }
}
```