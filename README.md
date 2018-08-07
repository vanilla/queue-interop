# Queue Interop

This package provides abstraction and interfaces necessary for both job payloads and job processors to interact together.

## From a job payload perspective

All job payloads must implement the `RunnableJobInterface`.  A job processor will then call the following methods in order:

- `RunnableJobInterface::setup()`
- `RunnableJobInterface::run()`
- `RunnableJobInterface::teardown()`

Beside this, all open source **Vanilla jobs must extend** the `AbstractJob` class so that jobs can be run directly on web server but also anywhere else by implementing a custom job processor.

## Services

Services are made accessible to job payloads.  But in order to access them, a job must implement the proper `aware` interface.  By implementing the `aware` interface, a job processor will inject the corresponding service thru a setter method prior to running the payload.

Here's the list of services available:

#### Database
A job can implement `DatabaseAwareInterface` to get injected with the [Garden\Db\Db](https://github.com/vanilla/garden-db) object.

#### Vanilla configs and locales context
A job can implement `VanillaContextAwareInterface` to get injected with the `VanillaContextInterface` interface. <br/>
With `VanillaContextInterface`, a job can access a `ConfigInterface` to manage both configs and locales in Vanilla.

#### Scheduler
A job can implement `SchedulerAwareInterface` to get injected with the `SchedulerInterface`.  With `SchedulerInterface`, a job can also schedule other jobs from within its payload.


## From a job runner perspective

A job processor is responsible to provide implementation for the following interfaces:

- `JobBridgeInterface`
- `JobContextInterface`
- `SchedulerInterface`
- `VanillaContextInterface`
- `ConfigInterface`

It is also responsible to inject services to jobs that implements the following interfaces:

- `DatabaseAwareInterface`
- `SchedulerAwareInterface`
- `VanillaContextAwareInterface`
