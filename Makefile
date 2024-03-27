# Reminder: Alwasy use tab for indentation, or convert spaces to tab.

# Create a Laravel model with controller, factory, seeder, and migration
create-model:
	php artisan make:model -c -f -s -r -m

# Refresh the Laravel configuration cache
refresh-configuration:
	php artisan config:clear
	php artisan clear-compiled
	php artisan config:cache
