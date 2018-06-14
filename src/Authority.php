<?php

namespace SetBased\Abc\Authority;

/**
 * Interface for classes for requesting information about and granting and revoking authorization from/to users.
 */
interface Authority
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns true if the current user has access to a page.
   *
   * @param int $pagId The ID of the page.
   *
   * @return bool
   *
   * @since 1.0.0
   * @api
   */
  public function hasAccessToPage(int $pagId): bool;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Grants a role to a user.
   *
   * @param int $usrId The ID of the user.
   * @param int $rolId The ID of the role.
   *
   * @return void
   *
   * @since 1.0.0
   * @api
   */
  public function userGrantRole(int $usrId, int $rolId): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Revokes a role from a user.
   *
   * @param int $usrId The ID of the user.
   * @param int $rolId The ID of the role.
   *
   * @return void
   *
   * @since 1.0.0
   * @api
   */
  public function userRevokeRole(int $usrId, int $rolId): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Revokes all roles in a role group from a user.
   *
   * @param int $usrId The ID of the user.
   * @param int $rlgId The ID of the role group.
   *
   * @return void
   *
   * @since 1.0.0
   * @api
   */
  public function userRevokeRoleGroup(int $usrId, int $rlgId): void;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
