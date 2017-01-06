<?php

namespace Drupal\events_example\Event;
use Drupal\Core\Config\ConfigCrudEvent;

/**
 * Defines events for the events_example module.
 *
 * It is best practice define the unique names for events as constants on a
 * static class. This provides a place for documentation of the events. As well
 * as allowing the event dispatcher to use the constants instead of hard coding
 * a string.
 *
 * In this example we're defining one new event:
 * 'events_example.new_incident_report'. This event will be dispatched by the
 * form controller \Drupal\events_example\Form\EventsExampleForm whenever a new
 * incident is reported. If your application dispatches more than one event
 * you can use a single class to document multiple events. Just add a new
 * constant for each. Group related events together with a single class, define
 * another class for unrelated events.
 *
 * The docblock for each event name should contain a description of when, and
 * under what conditions, the event is triggered. A module developer should be
 * able to read this description in order to determine whether or not this is
 * the event that they want to subscribe to.
 *
 * Additionally the docblock for each event should contain an "@Event" tag. This
 * is used to ensure documentation parsing tools can gather and list all events.
 * For example, https://api.drupal.org/api/drupal/core%21core.api.php/group/events/
 *
 * In core \Drupal\Core\Config\ConfigCrudEvent is a good example of defining and
 * documenting new events.
 *
 * @see \Drupal\Core\Config\ConfigCrudEvent
 *
 * @ingroup events_example
 */
final class IncidentEvents {

  /**
   * Name of the event fired when a new incident is reported.
   *
   * This event allows modules to perform an action whenever a new incident is
   * reported via the incident report form. The event listener method receives a
   * \Drupal\events_example\Event\IncidentReportEvent instance.
   *
   * @Event
   *
   * @see \Drupal\events_example\Event\IncidentReportEvent
   *
   * @var string
   */
  const NEW_REPORT = 'events_example.new_incident_report';

}
