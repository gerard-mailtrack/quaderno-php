## How to run the tests

### Pre-requisites

To run the tests we provide a docker configuration.

- Install docker
- Rename `.env.dist` as `.env`, filling in the values accordingly

### Running the tests

```
docker build -t=quaderno-php . && docker run --rm --env-file=.env quaderno-php test/all_tests.php
```