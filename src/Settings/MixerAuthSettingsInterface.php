<?php

namespace Drupal\social_auth_mixer\Settings;

/**
 * Defines an interface for Social Auth Mixer settings.
 */
interface MixerAuthSettingsInterface {

  /**
   * Gets the client ID.
   *
   * @return string
   *   The client ID.
   */
  public function getClientId();

  /**
   * Gets the client secret.
   *
   * @return string
   *   The client secret.
   */
  public function getClientSecret();

}
