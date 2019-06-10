# ec-bootstrap
A bootstrap for open source PHP development projects.

## How to use
### Installation
Create a new project using the bootstrap.  
```bash
composer create-project edmondscommerce/ec-bootstrap --stability=dev --remove-vcs <project-name>
```
Git init the new project, add remotes etc.  
```bash
cd <project-name>
git init
git add remote <insert-remote>
```

### Github config and CI

1. On git hub head over to the GitHub settings on your repo.  

2. Head to the branches Tab to configure checks for a branch on your repo.  

3. Give the branch name you want checks on, in this case it is `master`  
    * Tick the "Require status checks to pass before merging" option.  
    * Tick the "Require branches to be up to date before merging" option.  
    * Tick the "Include administrators" option.  

4. For the status checks to work you now need to log into the status checks sites to configure them to hook into these requests.  

#### [Scrutinizer-CI](https://scrutinizer-ci.com/)
* Add a new repository with the "+ Add Repository" button.
* Fill the github repository - it will auto-fill if connected with your github.
* Select the language
* Do not tick option for the Tests/Coverage Label - We've added these ourselves.

#### After CI integrated

Once the following steps have been set up it's time to test they work.

* Create a new branch on you're repo
* Make some edits - ie. fix test coverage
* Push new branch to remote
* Check the pull request link in the command line, when pushed.
    * If there isn't one then log into github and make a new one

You should now see before allowing you to merge the branch that the status checks are running and if failed will not allow you to merge.

