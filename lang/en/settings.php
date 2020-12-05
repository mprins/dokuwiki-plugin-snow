<?php
/**
 * english language file for snow plugin
 *
 * Copyright (c) 2012-2013 Mark C. Prins <mprins@users.sf.net>
 *
 * Permission to use, copy, modify, and distribute this software for any
 * purpose with or without fee is hereby granted, provided that the above
 * copyright notice and this permission notice appear in all copies.
 *
 * THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES
 * WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR
 * ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES
 * WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN
 * ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF
 * OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.
 *
 * @author  Mark C. Prins <mprins@users.sf.net>
 */
$lang['enabled'] = 'Enable or disable snow';
$lang['zindex'] = 'CSS stacking order applied to each snowflake';
$lang['color'] = 'Don\'t eat (or use?) yellow snow.';
$lang['excludemobile'] = 'Snow is likely to be bad news for mobile phones\' CPUs (and batteries.) Enable at your own risk.';
$lang['flakesmax'] = 'Limit total amount of snow made (falling + sticking)';
$lang['flakesmaxactive'] = 'Limit amount of snow falling at once (less = lower CPU use)';
$lang['animationinterval'] = 'Theoretical "miliseconds per frame" measurement. 20 = fast + smooth, but high CPU use. 50 = more conservative, but slower';
$lang['usegpu'] = 'Enable transform-based hardware acceleration, reduce CPU load.';
$lang['followmouse'] = 'Snow movement can respond to the user\'s mouse';
$lang['snowstick'] = 'Whether or not snow should "stick" at the bottom. When off, will never collect.';
$lang['usemelteffect'] = 'When recycling fallen snow (or rarely, when falling), have it "melt" and fade out if browser supports it';
$lang['usetwinkleeffect'] = 'Allow snow to randomly "flicker" in and out of view while falling';
$lang['freezeonblur'] = 'Only snow when the window is in focus (foreground.) Saves CPU.';
