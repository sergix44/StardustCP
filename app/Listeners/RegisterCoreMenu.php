<?php

namespace Core\Listeners;

class RegisterCoreMenu
{
	/**
	 * Handle the event.
	 *
	 * @return void
	 */
    public function handle()
    {
	    app('menu')
		    ->section('Home', 0)
		    ->route('Dashboard', '<i class="fas fa-tachometer-alt"></i>', 'core.home')
		    ->section('System', -2)
		    ->route('Users', '<i class="fas fa-user-cog"></i>', 'core.configuration')
		    ->route('Configuration', '<i class="fas fa-cog"></i>', 'core.configuration');
    }
}
