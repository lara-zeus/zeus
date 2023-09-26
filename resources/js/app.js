import Alpine from 'alpinejs'
import focus from '@alpinejs/focus'
import Tooltip from "@ryangjchandler/alpine-tooltip";
import Collapse from '@alpinejs/collapse'

Alpine.plugin(focus)
Alpine.plugin(Tooltip);
Alpine.plugin(Collapse)

window.Alpine = Alpine

Alpine.start()
