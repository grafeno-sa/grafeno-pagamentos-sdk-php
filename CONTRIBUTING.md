# Contributing
:rocket::clap::tada: Thank you for taking the time to contribute! :tada::clap::rocket:

We really value your willingness to contribute to this project. In order to higher the chances of your contribution being accepted, please refer to the following guidelines!

## Steps

1. Fork it!
2. Go to develop branch
3. Update your local repository with `git fetch` and `git pull origin develop`
4. Create your feature branch: by convention we use the following format `[task]/[description]`, example `git checkout -b charges/refactor-charges-class develop`
5. Done! Now you can develop your code!
6. Commit your changes according to our commit message standards: `git commit -m 'feat(charges): Added new functionality'`.
7. Push to your repo, example: `git push origin charges/refactor-charges-class develop`
8. Submit a pull request to `develop` branch
9. The PR must be documented as the following example: 

### History
Tasks or issue related.

### Description
Description about what you done.

### Reference
Issue reference, if there is.

### Tasks
- [ ] task #1
- [ ] task #2
- [ ] task #3

### Tests
Every new function or change must be included in unit tests, this SDK uses the PEST PHP framework for the tests creation and execution.

To run the tests, you need to include your `token` and `account number` in the `Pest.php` file located in the tests folder.

The tests will be run through the `composer test` command.

## Commit Conventions
In order to make the changelog generation easier we recommend the use of messages based on [Conventional Commits](https://conventionalcommits.org/).

Examples:
```
feat(charges): added `XYZ` helper function

commit description

footer notes
```

```
refactor(charges): refactored `ABC` helper function

The behaviour of `ABC` was inconsistent and (...)

BREAKING CHANGE: return type of `ABC` is now `String`
```

```
docs: updated documentation in Request.php
```
