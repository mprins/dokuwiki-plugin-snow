<?php
/*
 * Copyright (c) 2012-2016 Mark C. Prins <mprins@users.sf.net>
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

/**
 * DokuWiki Plugin snow (Action Component).
 */
class action_plugin_snow extends DokuWiki_Action_Plugin {

    public function register(Doku_Event_Handler $controller): void {
        $controller->register_hook('DOKUWIKI_STARTED', 'AFTER', $this, 'addJsinfoInformation');
    }

    public function addJsinfoInformation(&$event, $param): void {
        global $JSINFO;

        $JSINFO['plugin']['snow']['enabled'] = $this->getConf('enabled');
        $JSINFO['plugin']['snow']['zindex'] = $this->getConf('zindex');
        $JSINFO['plugin']['snow']['color'] = $this->getConf('color');
        $JSINFO['plugin']['snow']['excludemobile'] = $this->getConf('excludemobile');
        $JSINFO['plugin']['snow']['flakesmax'] = $this->getConf('flakesmax');
        $JSINFO['plugin']['snow']['flakesmaxactive'] = $this->getConf('flakesmaxactive');
        $JSINFO['plugin']['snow']['animationinterval'] = $this->getConf('animationinterval');
        $JSINFO['plugin']['snow']['usegpu'] = $this->getConf('usegpu');
        $JSINFO['plugin']['snow']['followmouse'] = $this->getConf('followmouse');
        $JSINFO['plugin']['snow']['snowstick'] = $this->getConf('snowstick');
        $JSINFO['plugin']['snow']['usemelteffect'] = $this->getConf('usemelteffect');
        $JSINFO['plugin']['snow']['usetwinkleeffect'] = $this->getConf('usetwinkleeffect');
        $JSINFO['plugin']['snow']['freezeonblur'] = $this->getConf('freezeonblur');
    }
}
