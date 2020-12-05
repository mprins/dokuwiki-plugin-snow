/* DOKUWIKI:include_once snowstorm.js */

jQuery(function() {
    snowStorm.excludeMobile = JSINFO.plugin.snow.excludemobile;
    snowStorm.flakesMax = JSINFO.plugin.snow.flakesmax;
    snowStorm.flakesMaxActive = JSINFO.plugin.snow.flakesmaxactive;
    snowStorm.animationInterval = JSINFO.plugin.snow.animationinterval;
    snowStorm.useGPU = JSINFO.plugin.snow.usegpu;
    snowStorm.followMouse = JSINFO.plugin.snow.followmouse;
    snowStorm.snowColor = JSINFO.plugin.snow.color;
    snowStorm.snowStick = JSINFO.plugin.snow.snowstick;
    snowStorm.useMeltEffect = JSINFO.plugin.snow.usemelteffect;
    snowStorm.useTwinkleEffect = JSINFO.plugin.snow.usetwinkleeffect;
    snowStorm.freezeOnBlur = JSINFO.plugin.snow.freezeonblur;
    snowStorm.zIndex = JSINFO.plugin.snow.zindex;
    if(JSINFO.plugin.snow.enabled) {
        snowStorm.start();
    }
});
