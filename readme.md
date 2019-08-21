## Laravel Website

This is the source of the official [Laravel website](https://laravel.com).

### Documentation

The website's documentation is loaded from the `resources/docs` directory. You will need to clone each version of the documentation into this directory. For example, `resources/docs/5.3`, etc. All of the documentation is stored on GitHub at [laravel/docs](https://github.com/laravel/docs).

## Initial setup

If you want to work on this project on your local machine, take the following steps, which assume you are serving the site with Valet out of your `~/Sites` directory:

1. Fork this repository 
2. Open your terminal and `cd` to your `~/Sites` folder
3. Clone your fork into the `~/Sites/laravel` folder, by running the following command *with your username placed into the {username} slot*:
    ```bash
    git clone git@github.com:{username}/laravel.com-next laravel
    ```
4. CD into the new directory you just created:
    ```bash
    cd laravel
    ```
5. Run the `setup.sh` bin script, which will take all the steps necessary to prepare your local install:
    ```bash
    ./bin/setup.sh
    ```

## Syncing the "upstream" changes from the original Laravel repo into your fork 

Follow the instructions on the GitHub article [Syncing a fork](https://help.github.com/en/articles/syncing-a-fork) to pull the latest changes from this repo into your fork.

## Updating after remote code changes

If you pull down the upstream changes from the original repo into your local repo, you'll want to update your Composer and NPM dependencies. This is also helpful if there are new docs branches available. Run this command to perform an update:

```bash
./bin/update.sh
```
