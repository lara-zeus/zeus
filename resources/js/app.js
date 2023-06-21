import Alpine from 'alpinejs'
import FormsAlpinePlugin from '../../vendor/filament/forms/dist/module.esm'
import NotificationsAlpinePlugin from '../../vendor/filament/notifications/dist/module.esm'
import focus from '@alpinejs/focus'
import Tooltip from "@ryangjchandler/alpine-tooltip";
import Collapse from '@alpinejs/collapse'

Alpine.plugin(NotificationsAlpinePlugin)
Alpine.plugin(FormsAlpinePlugin)
Alpine.plugin(focus)
Alpine.plugin(Tooltip);
Alpine.plugin(Collapse)

window.Alpine = Alpine

Alpine.start()
