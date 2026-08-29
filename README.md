## Requirements for Testing

- php

## Requirements for Development

- python
- php


## Setup for Development

### env

```bash
python --version # make sure python exist

# Option 1: create environment using venv
python -m venv .venv
source .venv/bin/activate # Linux/macOS
# .venv\Scripts\Activate.ps1 # Powershell
# .venv\Scripts\Activate # CMD

# Option 2: create environment using conda
conda create --name .venv python=3.12
conda activate .venv

# deactivate # this for deactivate enviroment

# Install requirements
pip install -r requirements.txt
mkdocs --version # check

mkdocs serve # run mkdocs

mkdocs build # build (testing before deployment)
mkdocs build --strict # build (testing before deployment)
```

## Examples

```bash
php examples/02-oop-fundamentals.php
php examples/03-properties-and-methods.php
php examples/04-object-types.php
php examples/05-constructor.php
php examples/06-visibility-and-encapsulation.php
php examples/07-inheritance.php
php examples/08-polymorphism.php
php examples/09-abstraction.php
```

## Examples - Full Practice - Mini Bank

check on /examples/10-full-practice-mini-bank/README.md

testing

```php
php examples/10-full-practice-mini-bank/solution.php
```

## Documentation 

when got updated go to index.md then update variable Updated manually.