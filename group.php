<?php
/**
 * @package    hubzero-cms
 * @copyright  Copyright (c) 2005-2020 The Regents of the University of California.
 * @license    http://opensource.org/licenses/MIT MIT
 */

defined('_HZEXEC_') or die();

// get needed objects
$group  = \Hubzero\User\Group::getInstance(Request::getCmd('cn', ''));

// Record the user (replicated in com_groups/site/controllers/groups.php::viewTask)
if (!User::isGuest() && in_array(User::get('id'), $group->get('members'))) {
	require_once \Component::path('com_groups') . DS . 'models' . DS . 'recent.php';
	$welcomeMessage = \Components\Groups\Models\Recent::memberCheckIn(User::get('id'), $group->get('gidNumber'));
} else {
	$welcomeMessage = false;
}

// return url (if any)
$return = '/' . trim(str_replace(Request::base(),'', Request::current(true)), '/');

// include frameworks
Html::behavior('framework', true);
Html::behavior('modal');

// include group script
//$this->addScript($this->baseurl . '/templates/' . $this->template . '/js/hub.js');
$this->addScript($this->baseurl . '/templates/' . $this->template . '/js/group.js');

// get browser agent
$browser = new \Hubzero\Browser\Detector();
$p = strtolower(str_replace(' ', '', $browser->platform()));
$b = $browser->name();
$v = $browser->major();

// determine if we are a group member or manager
$isMember  = false;
$isManager = false;
$isPending = false;
$isInvitee = false;
if (in_array(User::get('id'), $group->get('managers')))
{
	$isManager = true;
}
elseif (in_array(User::get('id'), $group->get('members')))
{
	$isMember = true;
}
elseif (in_array(User::get('id'), $group->get('applicants')))
{
	$isPending = true;
}
elseif (in_array(User::get('id'), $group->get('invitees')))
{
	$isInvitee = true;
}

//is membership control managed on group?
$params = new \Hubzero\Config\Registry($group->get('params'));
$membership_control = $params->get('membership_control', 1);
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html dir="<?php echo $this->direction; ?>" lang="<?php echo $this->language; ?>" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html dir="<?php echo $this->direction; ?>" lang="<?php echo $this->language; ?>" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html dir="<?php echo $this->direction; ?>" lang="<?php echo $this->language; ?>" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html dir="<?php echo $this->direction; ?>" lang="<?php echo $this->language; ?>" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html dir="<?php echo $this->direction; ?>" lang="<?php echo $this->language; ?>" class="<?php echo $b . ' ' . $b . $v; ?>"> <!--<![endif]-->
<head>
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500" type="text/css" />
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo \Hubzero\Document\Assets::getSystemStylesheet(); ?>" />
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/group.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/group.css" type="text/css" />
	<jdoc:include type="head" />
</head>
<body class="contentpane" id="group-body">
<jdoc:include type="modules" name="notices" />
<?php
if ($welcomeMessage) : ?>
<div id="welcome" style="display:none;"><?php echo $welcomeMessage; ?></div>
<?php endif; ?>
<div class="super-group-bar brand-out">
	<div class="content cf">
		<div class="skip-nav">
			<a href="#maincontent">Skip to Main Content</a>
		</div>
		<div class="branding">
			<a href="<?php echo Request::root(); ?>" class="poweredby">
				Powered by <span><?php echo Config::get('sitename'); ?></span>
			</a>
		</div>
		<nav aria-label="user and group settings navigation">
			<ul class="subnav">
				<li class="user-account loggedin" id="account">
					<?php
					if (!User::isGuest())
					{
						$profile = \Hubzero\User\Profile::getInstance(User::get('id'));
						?>
						<a class="user-account-link loggedin icon" href="<?php echo Route::url('index.php?option=com_members&id=' . User::get('id')); ?>">
							Logged in
						</a>
					<?php
					}
					else
					{
					?>
						<a class="user-account-link" href="<?php echo Route::url('index.php?option=com_users&view=login&return=' . base64_encode($return)); ?>" title="<?php echo Lang::txt('TPL_SYSTEM_LOGIN'); ?>">
							<?php echo Lang::txt('TPL_SYSTEM_LOGIN'); ?>
						</a>
					<?php
					}
					?>

					<?php
					if (!User::isGuest())
					{
						?>
						<div class="account-details">
							<div class="user-info">
								<a href="<?php echo Route::url('index.php?option=com_members&id=' . User::get('id')); ?>" class="cf">
																<span class="user-image">
																	<img src="<?php echo User::picture(); ?>"
																		 alt="<?php echo User::get('name'); ?>"/>
																</span>

									<p>
										<span
											class="account-name"><?php echo stripslashes(User::get('name')) . ' (' . stripslashes(User::get('username')) . ')'; ?></span><br>
										<span class="account-email"><?php echo User::get('email'); ?></span>
									</p>
								</a>
							</div>
							<ul>
								<li id="account-profile">
									<a href="<?php echo Route::url('index.php?option=com_members&id=' . User::get('id') . '&active=profile'); ?>"><span class="nav-icon-user"><?php echo file_get_contents(PATH_CORE . DS . "assets/icons/user.svg") ?></span><span><?php echo Lang::txt('TPL_SYSTEM_ACCOUNT_PROFILE'); ?></span></a>
								</li>
								<li id="account-dashboard">
									<a href="<?php echo Route::url('index.php?option=com_members&id=' . User::get('id') . '&active=dashboard'); ?>"><span class="nav-icon-dashboard"><?php echo file_get_contents(PATH_CORE . DS . "assets/icons/th-large.svg") ?></span><span><?php echo Lang::txt('TPL_SYSTEM_ACCOUNT_DASHBOARD'); ?></span></a>
								</li>

								<jdoc:include type="modules" name="minidash" />

								<li id="account-logout">
									<a href="<?php echo Route::url('index.php?option=com_users&view=logout&return=' . base64_encode($return)); ?>"><span><?php echo Lang::txt('TPL_SYSTEM_LOGOUT'); ?></span></a>
								</li>
							
							</ul>

							<button class="close">
								<span>close</span>
							</button>
						</div>
						<div class="hub-overlay"></div>
						<?php
					}
					?>
				</li>
				<li class="subnav-membership">
					<?php if ($isManager) : ?>
						<a href="javascript:void(0);" class="manager toggle">
							<span><?php echo Lang::txt('TPL_SYSTEM_GROUP_MANAGER'); ?></span>
						</a>
					<?php elseif ($isMember) : ?>
						<a href="javascript:void(0);" class="member toggle">
							<span><?php echo Lang::txt('TPL_SYSTEM_GROUP_MEMBER'); ?></span>
						</a>
					<?php elseif ($isInvitee && $membership_control == 1) : ?>
						<a href="javascript:void(0);" class="invitee toggle">
							<span><?php echo Lang::txt('TPL_SYSTEM_GROUP_INVITEE'); ?></span>
						</a>
					<?php elseif ($isPending) : ?>
						<a href="javascript:void(0);" class="pending toggle">
							<span><?php echo Lang::txt('TPL_SYSTEM_GROUP_PENDING'); ?></span>
						</a>
					<?php elseif ($group->get('join_policy') == 3) : ?>
						<a href="javascript:void(0);" class="closed">
							<span><?php echo Lang::txt('TPL_SYSTEM_GROUP_CLOSED'); ?></span>
						</a>
					<?php elseif ($group->get('join_policy') == 2) : ?>
						<a href="javascript:void(0);" class="inviteonly">
							<span><?php echo Lang::txt('TPL_SYSTEM_GROUP_INVITE_ONLY'); ?></span>
						</a>
					<?php elseif ($group->get('join_policy') == 1 && $membership_control == 1) : ?>
						<a href="<?php echo Route::url('index.php?option=com_groups&cn='.$group->get('cn').'&task=join'); ?>" class="restricted">
							<span><?php echo Lang::txt('TPL_SYSTEM_GROUP_RESTRICTED'); ?></span>
						</a>
					<?php elseif ($group->get('join_policy') == 0 && $membership_control == 1 && !User::isGuest()) : ?>
						<a href="<?php echo Route::url('index.php?option=com_groups&cn='.$group->get('cn').'&task=join'); ?>" class="open">
							<span><?php echo Lang::txt('TPL_SYSTEM_GROUP_JOIN'); ?></span>
						</a>
					<?php endif; ?>

					<div class="group-dash">
						<div class="links-header">
							<?php if ($isManager) : ?>
								<?php echo Lang::txt('TPL_SYSTEM_GROUPS_MANAGER_DASHBOARD'); ?>
								<span><?php echo Lang::txt('TPL_SYSTEM_GROUPS_MANAGER_DASHBOARD_DESC'); ?></span>
							<?php elseif ($isMember) : ?>
								<?php echo Lang::txt('TPL_SYSTEM_GROUPS_MEMBER_DASHBOARD'); ?>
								<span><?php echo Lang::txt('TPL_SYSTEM_GROUPS_MEMBER_DASHBOARD_DESC'); ?></span>
							<?php elseif ($isPending) : ?>
								<?php echo Lang::txt('TPL_SYSTEM_GROUPS_PENDING_DASHBOARD'); ?>
								<span><?php echo Lang::txt('TPL_SYSTEM_GROUPS_PENDING_DASHBOARD_DESC'); ?></span>
							<?php elseif ($isInvitee) : ?>
								<?php echo Lang::txt('TPL_SYSTEM_GROUPS_INVITEE_DASHBOARD'); ?>
								<span><?php echo Lang::txt('TPL_SYSTEM_GROUPS_INVITEE_DASHBOARD_DESC'); ?></span>
							<?php endif; ?>
						</div>
						<ul class="links cf">
							<?php if ($isInvitee && $membership_control == 1) : ?>
								<li>
									<a class="accept" href="<?php echo Route::url('index.php?option=com_groups&cn='.$group->get('cn').'&task=accept'); ?>">
										<?php echo Lang::txt('TPL_SYSTEM_GROUP_ACCEPT'); ?>
										<span><?php echo Lang::txt('TPL_SYSTEM_GROUP_ACCEPT_DESC'); ?></span>
									</a>
								</li>
							<?php endif; ?>

							<?php if ($isPending && $membership_control == 1) : ?>
								<li>
									<a class="cancel-request" href="<?php echo Route::url('index.php?option=com_groups&cn='.$group->get('cn').'&task=cancel'); ?>">
										<?php echo Lang::txt('TPL_SYSTEM_GROUP_CANCEL_REQUEST'); ?>
										<span><?php echo Lang::txt('TPL_SYSTEM_GROUP_CANCEL_REQUEST_DESC'); ?></span>
									</a>
								</li>
							<?php endif; ?>

							<?php if (($isManager || \Hubzero\User\Profile::userHasPermissionForGroupAction($group, 'group.invite')) && $membership_control == 1) : ?>
								<li>
									<a class="membership" href="<?php echo Route::url('index.php?option=com_groups&cn='.$group->get('cn').'&active=members'); ?>">
										<?php echo Lang::txt('TPL_SYSTEM_GROUP_INVITE'); ?>
										<span><?php echo Lang::txt('TPL_SYSTEM_GROUP_INVITE_DESC'); ?></span>
									</a>
								</li>
							<?php endif; ?>

							<?php if ($isManager || \Hubzero\User\Profile::userHasPermissionForGroupAction($group, 'group.edit')) : ?>
								<li>
									<a class="settings" href="<?php echo Route::url('index.php?option=com_groups&cn='.$group->get('cn').'&task=edit'); ?>">
										<?php echo Lang::txt('TPL_SYSTEM_GROUP_EDIT'); ?>
										<span><?php echo Lang::txt('TPL_SYSTEM_GROUP_EDIT_DESC'); ?></span>
									</a>
								</li>
							<?php endif; ?>

							<?php if ($isManager || \Hubzero\User\Profile::userHasPermissionForGroupAction($group, 'group.pages')) : ?>
								<li>
									<a class="pages" href="<?php echo Route::url('index.php?option=com_groups&cn='.$group->get('cn').'&task=pages'); ?>">
										<?php echo Lang::txt('TPL_SYSTEM_GROUP_PAGES'); ?>
										<span><?php echo Lang::txt('TPL_SYSTEM_GROUP_PAGES_DESC'); ?></span>
									</a>
								</li>
							<?php endif; ?>

							<?php if (($isMember || ($isManager && count($group->get('managers')) > 1)) && $membership_control == 1) : ?>
								<li>
									<a class="cancel" href="<?php echo Route::url('index.php?option=com_groups&cn='.$group->get('cn').'&task=cancel'); ?>">
										<?php echo Lang::txt('TPL_SYSTEM_GROUP_CANCEL'); ?>
										<span><?php echo Lang::txt('TPL_SYSTEM_GROUP_CANCEL_DESC'); ?></span>
									</a>
								</li>
							<?php endif; ?>

							<?php if ($isManager && $membership_control == 1) : ?>
								<li>
									<a class="delete danger" href="<?php echo Route::url('index.php?option=com_groups&cn=' . $group->get('cn') . '&task=delete'); ?>">
										<?php echo Lang::txt('TPL_SYSTEM_GROUP_DELETE'); ?>
										<span><?php echo Lang::txt('TPL_SYSTEM_GROUP_DELETE_DESC'); ?></span>
									</a>
								</li>
							<?php endif; ?>
						</ul>

						<button class="close">
							<span>close</span>
						</button>
					</div>
				</li>
			</ul>
		</nav>
	</div>
</div>

<jdoc:include type="message" />
<jdoc:include type="component" />
<jdoc:include type="modules" name="endpage" />
</body>
</html>
