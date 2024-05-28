import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/sass/scss/components/plugin-overrides/_jvectormap.scss',
                'resources/sass/scss/components/plugin-overrides/_progressbar.scss',
                'resources/sass/scss/components/plugin-overrides/_typehead.scss',
                'resources/sass/scss/landing-screens/_auth.scss',
                'resources/sass/scss/mixins/_animation.scss',
                'resources/sass/scss/mixins/_blockqoute.scss',
                'resources/sass/scss/mixins/_buttons.scss',
                'resources/sass/scss/mixins/_card.scss',
                'resources/sass/scss/mixins/_menu.scss',
                'resources/sass/scss/mixins/_misc.scss',
                'resources/sass/scss/_background.scss',
                'resources/sass/scss/_dashboard.scss',
                'resources/sass/scss/_demo.scss',
                'resources/sass/scss/_fonts.scss',
                'resources/sass/scss/_footer.scss',
                'resources/sass/scss/_function.scss',
                'resources/sass/scss/_horizontal-menu.scss',
                'resources/sass/scss/_horizontal-wrappers.scss',
                'resources/sass/scss/_misc.scss',
                'resources/sass/scss/_reset.scss',
                'resources/sass/scss/_typography.scss',
                'resources/sass/scss/_variables.scss',
                'resources/sass/scss/_utilities.scss',
                'resources/sass/scss/common.scss',
                'resources/sass/scss/style.scss',
            ],
            refresh: true,
        }),
    ],
});
