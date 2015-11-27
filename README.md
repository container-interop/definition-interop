# Container Definitions Interoperability

*definition-interop* tries to offer a solution for writing **cross-framework modules**.

## Introduction

Modules (aka packages or bundles) are widespread in modern frameworks. Unfortunately each framework has its own convention and tools for writing them. The goal of *container-interop* and more specifically *definition-interop* is to help developers write modules that can work in any framework.

Cross-framework modules can take advantage of PSR-7 (HTTP requests and responses abstractions) as well as Puli (resource location in packages), but the last missing piece is letting modules register container entries. That is necessary so that modules can expose services to users.

## Scope

While *container-interop/container-interop* tries to standardize how to fetch entries from containers, *container-interop/definition-interop* tries to standardize how to define container entries.

The definitions standardized in this package *are only meant to be used by modules*; they are not meant to cover every use case of every container. Given this restricted scope, the definitions are intentionally simple in order to be easily supported by every container.

With that in mind, users can rest assured that they can use all the features offered by their container of choice, while only module developers have to make use of the standard definitions.

## Installation

```
composer require container-interop/definition-interop@dev
```

This package adheres to the [SemVer](http://semver.org/) specification and will be fully backward compatible between minor versions.

## Compatible projects

### Projects implementing *definition-interop*

Projects providing definition classes implementing the *definition-interop* interfaces.

- [Assembly](https://github.com/mnapoli/assembly)

### Loaders

Projects reading configuration files in any kind of format and generating *definition-interop* compatible definitions.

- [YamlDefinitionLoader](https://github.com/thecodingmachine/yaml-definition-loader): Loads definitions from YAML files.
  Accepts a subset of Symfony YAML file format.

### Projects consuming *definition-interop*

Projects reading *definition-interop* compatible definitions and turning them into actual container entries.

- [Assembly](https://github.com/mnapoli/assembly): provides a simple *container-interop* compatible container
- [Yaco](https://github.com/thecodingmachine/yaco): provides a compiler generating *container-interop* compatible containers

### Modules built using *definition-interop*

- [Glide module](https://github.com/mnapoli/glide-module)
