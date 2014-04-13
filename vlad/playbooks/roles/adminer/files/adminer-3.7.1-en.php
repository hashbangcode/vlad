<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.7.1
*/error_reporting(6135);$qc=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($qc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$W){$Fg=filter_input_array(constant("INPUT$W"),FILTER_UNSAFE_RAW);if($Fg)$$W=$Fg;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0Ñ\0\n @\0¥CÑË\"\0`E„Q∏‡ˇá?¿tvM'îJd¡d\\åb0\0ƒ\"ô¿f”à§Ós5õœÁ—AùXPaJì0Ñ•ë8Ñ#RäT©ëz`à#.©«cÌX√˛»Ä?¿-\0°Im?†.´M∂Ä\0»Ø(Ãâ˝¿/(%å\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1ÃáìŸåﬁl7úáB1Ñ4vb0òÕfsëºÍn2BÃ—±Ÿòﬁn:á#(ºb.\rDc)»»a7EÑë§¬l¶√±îËi1Ãésò¥Á-4ôáf”	»Œi7Ü≥ÈÜÑéåF√©ñ®aç'3I– d´¬!S±Êæ:4Áß+MdÂgØã¨«É°Óˆtô∞cëÜ£ı„È†b{èH(∆ì—ît1…)t⁄}F¶p0ôï8Ë\\82õDL>Ç9`'C°º€ó889§» éxQÿ˛\0Óe4ôÕQ òl¡≠P±øVâ≈bÒëóΩT4≤\\ûW/ôÊÈ’\nêÄ` 7\"hƒqπË4ZM6£T÷\r≠r\\ñ∂C{h€7\r”x67Œ©∫J á2.3êÂ9àKûÎ¢H¢,å!mî∆Üo\$„π.[\r&Ó#\$≤<¡àfÕ)èZ£\0=œr®è9√‹jŒ™J†Ë0´c,|Œ=ë√‚˘ΩÍö°Rs_6£Ñ›∑≠˚Ç·…ÌÄZ6£2Bæp\\-á1s2…“>éÉ X:\r‹∫ñ»3ªbö√ºÕ-8SLı¿Ìº…K.¸¥-‹“•\rH@ml·:¢Îµ;Æ˙˛¶ÓJ£0LR–2¥!Ëø´ÂAÍà∆2§	m˝—Ì0eI¡≠-:U\r¸„9‘ıMWLª0˚πGcJv2(ÎÎF9é`¬<áJÑ7+Àö~†çï}DJµΩHWÕSN÷«Ôe◊u]1Ã•(O‘L–™<l˛“R[u&™ÉH⁄3èvÚÄõ‹Uàt6∑√\$¡6‡ﬂ‡X\"ò<£ª}:Oã‰<3x≈O§8Û>†ÃÏÏCŒ⁄Ô1É¢Å’HR‚π’SñdÅ9™‡π%µU1ñSnÊa|.˜‘Å`Í†8£†∂:#Ä ‡CŒ2ã∏*[o·Ü4X~ú7j†\\¡√Í6/®09ç\rﬁ; Ù;V˘Ñn®n™ ÿﬁâvù´k´HB%¿.k\">∫°[Î≠\nº¨∞lÕ·p‘9“cFZÅsÕ“|⁄>6 ú5≠l1VÁ“ŒêÍ6ç√ÿ‡7¨å:£\"AzäΩde¥Âò˝\\Ì5*ˇ’¥üè]£p[*áAm)Kt[ª\n8g=;˙˙Ê2zæ‡√|é¸ÚÃ£4òt8.¸≈ÏN#ﬂ ≤åøB\"À9∞ÿ˙%®™ËÑHQwàqd≤‡Fé˚˚§\$&V¶ñQ#éQ'◊Úã_ÿm°Ã°µ∑ à°ﬁ\r–‡¥h‡ Xrt0j5§åÒ‚ΩWá¯ı4µ˙«◊ìÄm’ˇïá\"CA∏F!œÏóñh>ﬂb0à0†7;8è4Kaà®“	\0‘p	aáÄ—HXF±ä1:˜8ÏU9HâÅI√≥À;ŸsQû7F§ãcLpXM@eò˛…¸ÉÂêû+g(õ–73OÏ3p∆ÓïbÆlEE>∑Chb%≤D¿I8≤…E'Ã	#)˘=%C£ÄjçY˘1∞–y’h;cAëé6„jK˚\r·¡›9¬éò\$|≠ñíº¯Àg-Zàoó\0àìÚzâê≥\$+Dø∞ÊV±w*”WÉêpÊJèõÜ\\˚≤FüO≥'…≤a1¿m,_⁄ß\rã‰1áP‰o±;\0–5∞ÊÌù¡e\r& 3ê^\rôµ6ÂMR2T\0πè‡5?~Ç5òûó™P>Ç85hπ†nÏ1;“Õ\rRL8`¡\\§–@å“`;z\nÌ\0–‘É8¡à9R‘yZP@æibê?∆≠v\$É<ƒ%	A\rÈ?ú\0«S •§°Ì† ÃB√û4J“®êÉ:¡`#Hiø7Œµ∫+}‡Ó™’vÓ•∞o¶J¥¿V⁄∞â⁄ê9’–ﬂW¡2¨QÆ\rÿT·D`éØf‚— ã≠wÈLµò≥£úI]MKd7*rk*j\nASÊ¬jFéŸ-[ezzœr≤Ì ÅfU¯3ÿÊ~\\‡¸Z£§Zíî{)¢Ú>>–ÉpøèÖ*´§¡Ç;zDb·w‘ ]§mC\nÉıúË®ì√KBÙﬁB£°äm@∆ùú¨œ÷¥>ß∂ıœÕwU¬í›*NÙ(ba°∆∂ä@fèvŸ)≠µ`∑\0uﬂD)mD@/4ˆ“„Î9jâéàÌ˙π™ÎHBm1à≤I®£5D¿∂RuE∆“9†ÂA”ó=1b›0Áäeøy‘ÿ1˚„s‰°;¥ƒÙÇ–⁄√–-•ÿÀÛÜ]s°à5ñ\\Öë\n1;»Ë≠◊Q‹^© bì¨iÅ;YJ2Éd!s¡î˜É#Òkg√hﬁÅ]ÍW)>V∆ÖIóx]√r≥ü˜;6“JLcprÅ∞d{pyÛπM˝Ë-éUVHË5'\ntÆÑ–≤§l” ˛pH€¬Õo∞e¡ZÄœ®”˘qíe…—X€FÈ`Gy\rÁΩ!ÓõWw*Ì¡áøDØÙu≠t%åπöd‡QÎØ/’pô:˛ih¿Åçt&˙òP≈Ãe,JÕå ‡t√!ÏOÿ7¥“6µGgR˙ÉöC[ÚÀskÎvqU°}y©hÎAGV≤èﬁ◊œ|⁄lF†ﬁÖL^ .Òﬁ]u&wÅ!ﬂ⁄[jnåÅn¿‡⁄è[kÉC≈‡v¿ﬂ¡˜kñrmO…≠æŸJ>∞ÔWT‚0ﬁˇ∑º\n£pM„C¯ÆπΩbõt¬˜VG|oy8Ùß»˘ØcÈ∞Ë–˙");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:õågCIº‹\n:ÃÊsaîPi2\nOgc	»e6LÜÛ‘⁄e7∆s)–ã\rè»HGíIí∆∆3aÑÊs'c„—D i6úNå£—Ëú—2H„Ò8úuF§RÖ#≥îîÍr7á#©îv}Ä@†ê`Qåﬁo5öa‘Iú‹,2O'8îR-q:PÕ∆S∏(àaºä*wÉ(∏Á%ø‡pí<F)‹nx8‰zA\"≥Z-C€e∏V'àßÉÅ¶™s¢‰q’˚;NFì1‰≠≤9ÎGºÕ¶'0ô\r¶õŸ»ø±9n`√—ÄúX1©›ÅG3Ã‡tçee9äÆ:NeÌä˝N±–OSÚz¯cëåzlé`5‚„Å»ﬂ	≥3‚Òyﬂ¸8.ä\r„êŒπP‹˙\rÉ@ç£Æÿ\\1\r„ Û\0Ç@2j8ÿó=.∫¶∞ -r»√°®¨0çäËQ®Íä∫hƒbºåÅÏ`Å¿éª^9ãq⁄E!£ í7)#¿∫™* ¿Q∆»ã\0äÿ“1´»Ê\"ëh >Éÿ˙∞––∆⁄-C \"í‰XÆáS`\\ºè§F÷¨h8‡ä≤‚†¬3ß£`X:OÒö,™á´⁄˙)£8ä“<BN–É;>9¡8“Ûácº<á#0L™≥ò 9éîÁ?ß(¯Râ#Íe=™©ù\n´√Í™:*Í 0÷D≥ 9C±à◊@–÷{ZO≥˝Í›8≠¶i™oV®v¢k®Ar™8&£Ö¯..É—cH°E–>ÅH_hÅìŒ’WUŸ5·Ù1çr*ú¶Œˆ^–(€b‡x‹°Y1∞⁄‘&XH‰6Öÿì.9áx∞PÈ\r.`v4áòî∂Üç√8Ë4daXVâ6ÅFè‘’EHH∫fc-^=‰¬ﬁtô›xãY\rö%ˆ´xeè†ÁQ˚,X=1!∫svÈjËkQ2…ì%⁄W?ˆ√≈Æå¥Ê=êdY&Ÿì§VX4ÂŸÄÃ\\ó5–ﬂ„X√¨!◊}‚ÊµNÁ°gv⁄ÉWY*€Q≈Ëi&»l√Œ—µZ#ñ›„Ò†’ë\rAÁ\$e∞v5o#ﬁõ¢ÿ¸ê∂5gc3MTC£L>vŒHÈ‹√˙ñß<`¯∞⁄*†]Ç_à£;%À;Ó⁄Vñ˘iéì¿Ë„4X√Èñ'îå`∫™…„i◊j0g∂O±Ü€•ìiÊåÏ©9∑∆ô€íd›FÍ Ÿk/l≈û∏ñnƒ‹c<b\nâ®8◊`ëHìÎe≈}]\$“≤˙÷‚ Ì∞!Ü¿“√C)±\$ ∞öA◊`Û\0'êïÄ&\0BŒ!Ìå)•Úò¥5E)‰¡‡“¬o\rÑ‘8r`˚»Ã!2Í≠T¡õs=ØDÀ©’>\n/≈l”âíï[˝ò≈†P€‡aá8%ê¯ù!›1v/••SUcoJ®:î4J+ÅBÅ‡ÛáµvØJ¸Ç\r·‚¬b{É†,|\0Ó∞zˆÉc‹™≈Yß≈lÆ\n¸úi.ı‹!‰€)¸¶dmÓJ´Ø—»!'“¡Î B\nC\\i\$Jò\"æÎ÷2»+ÁIkJññÒ\$äëí‚Gôy\$#‹≤i/¶CAbæÃbÇC(·ò:∞ UXòØî2&	«, Q;~/•ıKy9◊ÿ?û\r6æ∞tV È—!∫6áCP≥	hYÎE¡ê”Œÿ‚£ˆlÒ‰èû(ÿñT·“p'3É–C<ÿdcÆÅ∏?∞yCÁÛ˛e0º@&A?»=§Â%≥A:JD&SQò—6RÃ)Aòù–b`0⁄@àÈu9(ç!0R\náF Ñïé¬ä ƒwC\\â©å§œÖr‘‰‹ô°Ó§#ï~ÿ2'\$° :–ÿK¡`h¨≥@â£EbÛ¢[–~°—Èí‚ TÊ≈lf5™≥BR]±{\"-§–\0Ë≠ L>\r«\$@ö\n(&\r¡à9á\0vh*…á∞ñ*∆XÎ!_djàòÉÜÂpyπáèÇ∂ë`·jYûwJÇ\$ÿR™à(uaM+¡ÍnÌxsÇpU^ÄAp`Õ§IÏíH÷\n®fó02…)!4a˘9	¿¢ÍïEwC›–°òìÀ© âL◊P‘›ƒ˛Ai–)Íp¯3‰AÅu‚¿ˆ˝AIêA…Hu	Á!gÕïíUîêâéZU∑¿ºc§*≠¥¿∞MÑ√xf∆:À∆^√Xp+ëV∞ùÜ±·≤KâC#+æ ÷Wh˙CP!»«¿;î[pn\\%ò¥k\0ÑÙ≤≤,⁄®8‡7„¨xQC\nY\rˆbˇ£XvC d\nAº;ÇálF,_wr4RPÔ˘ªHAµ!Ù;ôâ&^Õ≤ùÖ\"6;úÂ≤ÍŒ=˜#CÌèI°∏Ø9fÈ'¨:∏üDY!åˇB+òs°xVÜû8lÁ√ì°\"œÈëÉÕHùU%\"Z6≥‘u\r©e0[¡ïpƒﬂÿa°Ë.Ö¿∂ +^`ú`bß5#CMâ\$≤ ˚IÁÓéÀöAÃPß5C\r˝ SïdÍWN6H[ÔSRΩµ∑Íﬂ\\+èXÎ=k≠ıŒª◊∫˛ºSîÅ∂”r^(¶Éoo∂7ô¨œ©\\huk¢lHaC(m‡Ï˛¯nRBÜ§Uup≥⁄2C1ö[∆|ŸΩ˘beG0–Ÿ\"ÏCG±≤?\$x7–ﬂn≠§\$ZŒ=üZ”¶û√si5ÀfœÌ&Á,Æf”hi∆IŒyé÷nÓ∂2Ú0⁄úDvE¸√TÔxÙ˙MÂ{‡Ù`‹§¡GN#ÈÅÇZ,´¬É/‚R\$î#\\I-	ÆÑ∞ó|ƒ0‡-0˝âNÓ¶P∑…“Å§;s-òvÙñœ“ÜˇΩánwGtÔÖnîè°“di·H◊|•ò4§(Ωº+ºvÚ•›&ÿ≈Öí+K¿£ÃÒôL\nJ\$‘©˝Ü®µ:\\Q<WB\"^óÕÒ§∫WTIB~—ﬂq¨…ûÂ}Û3üŒø\":˛Uá·≠÷|\r5n(nô≠àÅá Ÿ7ÉÃO¡D}B}ãº®Ê \0\rìvo‹ïÑÖ∑ÿÜ_JlÇƒ∞ïH3ë\"Æ[ƒ∏‚Âæ‘KäAèµ`ﬂñ˘Ø¶N…¬¸&(Ç)\"à fˇ&≈\0∞¶ bæÚ®lç„Fé.¬çjrÚÓî˛‚J¬à∆\"P<\$F∞*È|f/ﬁ! ›OÁÁåpR «ôÑF#5g‰b„†ƒ8eRDi∏…0ìPÇ+*¨¸∆˝ôèûkêZ;√pHh¶Æl!ËÅ\0\r\ncõo»/ø˙CBà<py¿NTHΩhÍTÁ	@ÈpxÃ\$¢äÊ∞Ã¿÷48\nÄ“#ÓNU,”àö\$PÈmÚ†YK¸¨\"H†“ ÜR˝L∏˝ãÆ©Dü\0âø‚àÄaêWà`p˚Ô˛˙–gùØÍlP§è¬ˇo˙:LÄ∑ +\0 ]0±<)ÇˆN´xk\n(`cÍÑ+r∑k{m\"‚3.0±ûH1íe*ZoeBÃãê9\r»¯⁄\0RLi•Q®U‘ã`‰¬.îè˚Ò¬ño:≈dÄ¥¬íµT7Qú—V ª…Dhë‚WÊ¥ÎS1Ò	Ò¯gÊ*2Øë,ÜW)∞¡@Áœ∞T@C	Q(Ò,ô≈4Ê#d<“í\0¶! ·\$ò˙2 {es¢¥+Ör ´˛ÕÏŒJvY*åHPr\r§ÇÜÕT‹M\\\\`ºøÌvÌ‡Ê<Ò´&ƒnÙD\\HH»oj^@¢⁄	†¬<ÒäÜØÎ∆8äì*#fÚ©*«˛\r\nTß \\\r≤´*ÁT™^*†⁄…† \$™6oﬁ7Ú–Ree8≥  Á≤°,“•,”,`|9ç∞K2œ0r±+“ß1R÷‰\"» ’*†P*Âæ»ÜM\\\rb‡0\0¬Y\"™\"∫UxÜêŸ`∞±Í»Ä‡QìE\r¿~Q@5 ô5sZ≥^f¿R@Q4»d¿Ç5√b\0û@‘FÛb/Ä8\"	8sã8‚<@öÉ„Ïl2\$Sh±†®\nŒR\"UÏ43FN…´7\"D\r‰4˙OI3¬ò\n\0û\n`®``é≥‚ Y2 obÒ3ÛÀ<n6ì]<`êÏ\"í” Nà\"B2‡Z\nà¸m•†‡E¿ÉÎÓÈ\0£¸‡Zx¿[2¬@,¬íí˜<P›?Ù\r‘8#d<@∞¥JUä¨K/E°;\$´6ÛÃSîDU	l;§,UœLŒíÒ7fcG\"EGÄÛ\$£®\"EÄŸ3FH∆§IìÃ„dë=e	!“UH–ë23&jä»¨”*˙¬%%”%2ì,å”JQ1HÃl0tY3ˆ¡\$X<Cƒt‡4Î_\$\0©„>/Fê\nÁ¢?mF¨j÷3•p´D·ÑHKúv »∫…úé\0X‚*\r öÂ—\n0üëe\nŒ%Ôú∫‰¡\ri˚ƒÍOÄ√flâNˆ©M%]U¨QπQΩLÈ≠-Ü˜S¬±T4–!†‰U5çT\nnòdi0#àEä™M£à≥´iê.™∞/U†∏È\rZFö˙”jÑÆ®;¢ÚÌHœ‚òéd`m§›©˙ñ–\n˝tÑÉQS	eÈ≤≥|Ÿi≤öÒ¨¡Qt¶ dÚ12,õˆ¡DYÚ1UQSU¨±cd±´µƒEà)\\´ñ∂¬Lˆ	ÏF\$∂@ˆÂ≥VÔ{W6\"LlTƒÎAÚ\$6ab„ãO‰ÍdrÃ…LpÜc,í®esŒû®<2Ï`∆@bÄXP\$3‡‡êåé@ÀÉP,˙KÕV’≠^ıæ‡œMîáLˆ∞∏uÈ1˛Ÿ@Ócïàt-‰(†∏†`\0Ç9∂nÔÁ2sbÑ° / –Fm‰)∂ÙÉ¥ˇHl5Û@œnÃl\$áq+:Æ¬/ §¯ßdåœ,Ú‡\nÄﬁµàéÏÑ£.4˙ñí\$ ≥w0\$Äd∑V0†»¥\"æ√rÏˆW4678ÌVtqBau˜p√ÄäI<\$#≈x`…wdê9◊^*kÉu◊ofBEp	g2≥ÕÛf4 ‡âL!Ír=¨\0ßÒ\"	⁄\r<Í’hˆ”“ÊˆéàUÖ%T”hÀÎBkÚ∫#>≈'C•p\n†§	(Ç\r¥˙2ˆéá¬\"3‚ãlïıM‘ã7˝G≈x.à,÷Uuÿ%Dt¯ √w∂y^≠Mf\" ÇäÅÉﬁ(vUÑ3Ñu¨£J^HC_IUñYkSÖóác_ylcÜc]rF˜Â◊_q§%ÜW#]@Àr≤kv◊3-„cyƒœVHJG<ÄZ•ˆTË@V∏8ú\$é6áoÉ2H@ò\r„Ç‰¬™\0¬à=ÿ›çˆ∑Êπ\"3ã9zı≤:Kıè˙¬uØèK >Ç¢åøB\$¬r›.‰J“Í<KıG~‡PøX¥ÄQM∆π	Xåâw\$; ÊmpîZpïè ÂcK!OeOO∏?ÔwpÊƒÊá§ÌÜ÷†¶⁄Ló∂I\nåï?9xB§.]O:VÆÑòﬂ9ﬂ√.≈mWä\0Àós>î*¥l'è´ık≠∆oçphªíËxºãã´ﬁv¥L`wê1î˜∞ ÄË!∏M®4\"ÚI\$’˜\"oı\$¿†>ÀôBea\"ôÒüDˇBoÉ ∂¸+Ï B0Pxpä´&‡·7√|p{|∑œ}7÷∞¬\$-P£âÇÈ˙@bÑÖ§ıe§∆Â VYmoMùoä\0¢ß£Nzn*>›ŒÑÄ)¢Ú∑»à◊-Hál!Æìçºhp∆gŸÀ äíº€&tZ¯„ú§\0ç!Ç¶8 …©∏®‡∫ZKäÍ@DZGÖåïü∫Æ¯Ê∂FÄÁß©.Ü àºl¢¸z%»Œ(‰∂xŸ}≠˙'<ö˝≈™(∞º•˙∞Í<⁄XZ«¨∫⁄—ö‡∞ …Æg¥∫Ìß∫ÚáÚwØ∫z‘z{∞e∏'{;@Âô±(&¯≤≈R‡^EË›õx∫ÂÆõYÆÒ\"ÀÃÎ•M‹íÁÁñVˆ⁄\nß5”zl•zr‘[xü≤À™í•˙ìªG\$O†W†@§Ω¿´Zπx«Œ’ƒÚ≠,Ãïîèbeªâ 	àf£d∆ª–2˚’E√ãçãIºDëYTŸ%êkö{ŒJ≠\\\r∫U N ≈'º_æ€…Ωªf|wﬁµê˚‡À,Ωl´7™kt¯1RéD>ˆ–ãXâZÓÕ–ä≠|y|Z{|◊’¢»Ó\róÈ%;¨#\0eZ,\rKt\r∂>„ﬁ>\$Ú>ÉÏ?Ñ?c˙?‰+Ä‰@ÑÚ• Ä∆„@ ∞ïå„Çc„qàfc∆“+«3»òÉàíÿÄ&xï]ÄN∑–ˆ*|»’b2<lnTÂ÷\$£AÃ˚¢Z0.‡∆&¸ﬂÀ∑ˆº`{Àp,Ï@¸¯&|ÌïÓœñ.““.oo¢ç@ÉŒ€‰1=\$9{º…dB;øìı◊î#∆:£’\$@w“£ÿ=‹˘ÀC?– ’(˝?”É÷ ŸG1Ü|¯\"]”\0 ¸»5˚\0Ej\r¿÷@@*¢2KL∫#d*†‰CA–3,K`Ê ÿ˝¢´C±Ÿœ≠⁄§€¸˜∆‡]Ÿ„\r⁄L9€ù∞ì=¬ì<ñ∑]∏(‘jC¯) Ì,‚Á⁄Bf\r‡⁄‰ Î£-êRd5„ˆ\$\0^ê\n4§\0œ⁄¢ä≠SY›‹ÜÜkÇÄŒ4˝Ë@§B\0Á…¿Wﬂ‚?x(É¸úu}Ω‹⁄†ø‰Ω≈› K~P\rùπÂ•/‡æE\"Ωø€#È·>Rû_ÁÙ‚∏\$< ¢Ã\r«l‡[‡âæø*÷`é\n†áËÌ~¡Ωb‹˘Ω]ÅÇ›j∑B\rΩqÀ£QÍæº+˝(¸W|‡ËÂ+äep9—j}R<¥w@ÇÁ…dbÃ¥É’Ë ¿Q’§äÇÕÄ¬/(Á®¶m‘ëI_‘}U<‡›’∏«–óByÅ—˜∏Û§_Òf•&FÕå¡∑F.} zhÁ¿yó©πFcÊÜ‘œrU€´Fqõ≥û:í\nÄ‰\n%«ŒÔ`Áñ–D@Ú≥{¢Ùàñ’ﬂÒâˆˇs/wh]Bz\"J¡û#‡„àÉf¿Ä…˙˚€TCì•ç˛†_≤ÔÉdZÿ†ˆ÷£m2n¥nCíËK„ßG\\9(ÎBÜoù´ ÀÖS¸#ê‚Ü|¿£ôd)EÛëﬁÄƒ|√Î,ÄÄbg 1éNÅ1uªP91 \0àâT\0ì<ˆp>iJê≤äÉ6p\r-ƒ¿∂S0°tØ¬HJŸ`†7Dc¿úöp)ã\nﬂ¢\\®§–Œ%¨a¸Ã·Q˘¢ ÓæC—fÉ¶Èí˙„ÇΩı‡6\näe∑Åå\n>“@%h∞%I	ì`ß\0ÁuAX¢KÇ¸	`√8+ÄˆI\\(‘\r≈ÑØ\0Ó§l˙H#]*y\$∞¿⁄,H¸?E≈F±C7ô`»õE@rG¥páLB3H,ï0÷+ês\r\0Ë≤\0Ú!¢9ÑHua4π¬À ·É0¢aJÀ(∞\0¡§Dq∞g¿∏aJ!¡ãm~A¶a&√†É/ *pì§\"ÀI‡áBDƒ\r!Ü9!váLë:ÑÒƒä„!\$±öAáKÒ–‡Îeﬁ√\0ˆl∞b	i¿π6%ÆYzKrlRKí\"AF{ 6àªXHÛ&á:h~œË9‡»_÷2Ws>úËà÷\$»–ã„¢™§ ∞Ü©p≤C@vz∞0û¥∏ç÷á8‘“\\Ñv¥¨Œp:s_\\Äû:ºŸY\rBÄ“ˆ·\$|ü≠≈i©Gõë¢R#Ñ	YR9¬\0D28?È©Ò+}Y”‚–·©áJ#¶C˚iVãCT6˘Q9±‡épiteºL‰‡p\$º4ä\$D#í@@∞Ù<AœÕP‹ë÷≈\0áfß!Ÿ‰‚ûì–∞•)B2YZ\0Ë.†ëòS¡≤(À√Ú¿.é 4b1ãHá“`ÿ≥®Y)Ëä‚R‚ƒÇ¯ºÅ†`1Ëg”––™H:B]äO#8¬ÄúK±à€\n jD%C*I\$Ai—¿ÊN,Å0	 K(\0§T˘Å`\n2OB7¿¯àæ4Q§CH	Ñ∫4@ä•  )\$\0	¿Jqüƒ‹+∞”KÏe¿ÿ&.ÑJ'p“=pﬁ¿Q¥ΩËÍ¬[xXb· <E—'DÏ#ŸÄ¬`3Ω¯‰Î60@@Ë⁄¶ıá `|äRÏÄæÙ5⁄Ò.ÒÚ ﬁ◊¡ê?#?èlS\"!µjEÑÙqÄ\0∫£ ¸∆Qó—…\r‰T#<∞¸äà?1Ωè(HBñ–FL¨Â[|Ñ@LEß‹Ü &Q€:yƒé≥Ä‚Fh4qúäàœ„ñU†Øƒ\"!C1èÎFJ8#@¸∆f:d—ë8#2C»8Ê2.\$¥Cbê¥|\$æ0‚ò Œr”I\0êÄ,çÄ¬ò00«K¨e!∞N˜◊i@d|·5áƒh`Ç√	TàÖU2Nj†ÛiçÏ0ÄUdk¿¬*&jóF8*√E£¥á‚zcŒ¨Ä®Œós¶ïÊ√Çò5Ô¿7£\n\r‰ÌUÈ,–2‚`îÉ @‰¬π¨À@Xéû*≤p:-,\rRZ†L•, É|∑ú‡l∫^ÈO·0◊	BCÅÃRánòú‘VÈ°Ò≥Ïì ØÂTÈ]∑MrÈè¸ô‡#êÄπyÜ\\\"y†\$œ§≥/ r*hîÓ%–1¥KıÍ‹àœÅ|R`béBµ8πrÚ1íÁn\0Â§		Ã\r‡U8±l˘tBö†(ÉÜÇ»\0003:áÜ∑å%¥†-|ª\0ˆeTH\"Hq4(N\\jc∑ö™ê®ÖT∆H\n∏\0Ä›m—3Á?1S:>|g°ü€Rcå¥Ù¯™™\rËûF8Q&ÒÑ@5r\0Ã∆XV˙5é\\Òf°h@v,òËê√/\0\n&ñ/!å«dq∞öKRÀ‡∆èm;ÿaD2†îÜd\0002∫Êb\$	ÆLË/1ïÖ,¬E«4πÖã@<‚¢}a€åÊ\$¬≤1*ÉçÀ`∆>0ã :¥‡d 	-	√Ñ\rDÀYl(6[6ùk‡sfË¡' 8I…åTÛïJDUD:A”2⁄hd\0a\0ÜŸ∆Õ)2Î:¥πB3:ÄÜâÇZ1=ñúµ@Î-qN\\!§\$íkßfÉ‡ŸN⁄w	óíÓöîââ¥Ü`¿n\$LŒCR®ÉÕÙ´5ûpcêE3Ca¿∞\0=ûHj⁄ígóª≈Û-⁄òâE∞e£.\0°!oà,“'ëwÊI`\\s6¿R¯ÏE“}e0F\\ˆ„m±|F>q ?j–îÊ6iöÌp	ª†+¿NıÈ˝˚¬Õ˙ﬂ»9Â’qu¶ÅpËÆ2e…ëâ˝mç.ä+L~\$\"àà–R†s]iü◊qC¿–ò<T(iúç€åQÍ≈bt‘\"ë©NÒB∫“m∆∞Ä@rË¬ãÃ«xMMÑq¡#Oj /	 LˆDíK˙.∏Ÿt0tI•eB∫–jÑî1â°‚6ä0~s‘74ÌbQäQ¶!¿2ê„‘ñ‡À«ºàDÖ£H–ÿ2Å¶PÒ˛dÓàmM¿∫ D÷àF¨f»π\rµDj\$æâLæ[\0„`ïˆ°Œ<@mÿV~9® vé4äû=!ü¸àí2öŸí°6˝'ƒÌ*D“î¥Ç˙‚õ#©—\0ﬁø{ªÖ' 2ëlLRóJíäô£—ûX†√´,E„(C®\\√G¢˛®”;/ß⁄—‰ƒR\$ä˘d¿¨\$æQJ`œÑ!“ÆäôK‚\n|∂9°TñdxÃ@∏h!'¶¯ EÃ„-ôv}b…;|cfLÈ˝è˝¬YAROÈ⁄á|3ÍèEgözQfÓ@ÅlÌÛ/iôæ—Ùo÷EÜ≈ógo^q¢\nAaŒîgÀ∞!˘´@ÚR”Ï4¬…1lE!ëpîÙH0 jbÃ˙qùA¢…aÕ@xTäß¬›ô\0\r¶F≠ππ©45H˛Zm=¯xöFáCÃôòÜív?CöûLØ2â}hfX∏ƒ\$`I‚‰b†\0ƒ≠7‡G‰ÈD≈©∫Œ≤fP9Uö≠`\"Èñ≠·æÙ\r¡è∞Ij‘ç ∂TÌ\rUz´·á*˛´TäΩ!CI` ·ﬂX2 ÅQÛ£k#‘Ö\neÜeù+[l~:∞»~≤hn	–hà'ÕôŒßUV® ¿N∫WLΩˇ’ãQ=)nI™≠æ≤µ“Ñ“ÑÊ^Y∑˙Ú¨ïpUÉOÇAXZøU’µâí∏S‡ì´ïï\\≠ÿ@Cr·\"÷¸ÓÕÑ;≈^E ¿-Åx\rË˝\\˚Pô”‡ç†Úv!I:Z	°\\•_◊2CPÄtWYäÆÃ∞ ¿_]êa+¥=sªÑÌ]¢uC-hÎ* ÍÊ◊“∫	{≠…ﬁ+ÛZ˙˝ÀD\$∞c\$-v€BˇPÃ.Æ’Ús¬§˚2ÂR¸Èj[Z‹/Q≈Q:∫¢∆ˇ1YÂ+⁄æâ⁄æÖ!≤S≥b¡ô‰9ÊñZy⁄≈∫b,ùt0ÂŸf=@◊\r†-òç\nB-…ü0§&2_•9É•íÒhM,◊ë2éH„oTê∆ﬁlbd¢ìÖ†∂ \0â[‡\"≥%A÷æ€4;2Õíd.ƒ⁄ÀóHæZb545H¿\\˚ ìT†–A†òâçåóRB Ñ÷§È-€l¶⁄Jsœçû6\"± »Çk=ú∫ü∂Ö¶<†>≤ïjZgÊx`À6ï¿t´.Ÿ…„b,úÕ©ô∏k∑ÛY∏\\`'≥àSlŸj’∞!lnÃÖõ\0Wg+:+íc6~¥¢ÇäKF⁄ ñƒ©-±§°h9-ÖñH@SD˙G◊;»Œ†≠˚É_ÜÂ	\nÍ)à®fnÂ¢‰Qù-*¶C÷©ÔÌ£{¸MSnZED\0)≠Â∂Pg]ÀÆ¡6Ø¥Üb%Û%≤çâHj&%-* 9}àj43@Ÿ*(m∫\$QD∂˘€ÜË–“π(‰›m¬ºukjO•\" ,1£ÇƒÙVvº%sì1kÆPê`É	˘°Ä/ê@úü0>Fâ>#±¨Xá¿8%Ål‚¥πK£⁄S|πYw0uÃßb√â—X4p\0\nâ’‡˘Á∫Ê∑∫%”\0Z˛Q2WÈWE∫kÒ´Áo…á∑jÎ¢yß	.Z\0™	Pp–tìH≥áœR>”À,%)Òk∫äÓ˜`|§´,prZ”hÕäõZ,P∂Å∫|Ù˘ôCFLÒx™nÒ˙ ªãá.Êõ•PReí‘VÑoB;xDÜÜîkâ)ßM?n”`“ /°5IlÀqh\0ƒ◊¶¿5Eh†qÈÌè¥∑ÅΩAÇÀâUŸÊd˜àkDîÖOy;ëŒÚ∆Üº√´‚ßA.OrÛ∆Ñæ!€ÔHû”^“ãD3ΩI‡Ëgã÷>íıÈcÖÏe~Î€Z»oóŒô≠ô∂n£_^Ú+∑æ!Ÿ«h•|*3ﬁ¢ÎGÄ¢È¥[ânò™¥‹⁄∂ÌjÙ¢pØé˛óˆ7HΩ/Úæ”T›¸+˜›3õ˘lP{<2Ó˘á û–©‚)\"√£ﬁç£∂¢YÀ£ßA2Äã:˚÷Ú∑&\0€É~cKÓ…¿\nÏ„Dó4èGN™g.`ÕRB1∆H.j‡{¡Ë}n∑|ó¯œ/òÒ∏o‰∂ùÄ®◊`]ÿœf_6√y`¨\r x^@‘‚ä\\R˛=˝'œÇÉÈ_{X-òÕı\\)L…E—√ùØ¬âå·Pœ§l\\\0]Ö°hare”ù8íNÆ•Ç‹G^˛äI:ôàèﬂ‹µ¨J%r”~ú-‹ç	1îgØÇ+gV£oœÉ´zm”È>54â)Åmû˛¯mñ\$o˚Ebè∂åÛ‹í)mÕEÏ—®•Ê›K6!*\nÎÜ”îqÓ	Å√0?íﬁwÖæPKé≠g√1‚iâ≥~X`\0XÄÊYÁ	“Z *Dhú˘„1E¡lÖ‘Û„∏\r\0:?\r>–Ç#2°@¥3€h2È¿Ë¢∞ô¥√Ü&‡ÍOè–µ.¢…Ñªï(.L<rÅá·‡KÅ#·èí@A™ê[,LÖ5ê4õÅ<!µrè—,·‡YI≤HÔ—d)+lè\$U\\|‚˙ﬁ'Ö¡›£T¬ÿ·\0Ò'í¬œ\$ˇ;\0—ÕŸµQ‘Ëw≈÷π~‚å¥0qt^2yå£çÆ·L.äàüïa{û(Å!ó‘*\0i~?9Í√ÑGµl2≤3∂v4†?f[rƒ‘Ü;AåYn≤Ó)èê í¬É&àãåPç2D@Äı˝„ Œ]∆wñK2Åx∫ .öpÀ¿[4≥u6À(«} J3…\0x\\øT\\)!Ã>bVÜÑ≥·¶E—åÄsó˜Ê:–∆8Ã8{Ã>œáÄA˘o…‘HryäëùŸ˙SâdÕvmÛr◊Éf√Î≠Õ>jO•\n¨√Ä∑5ëÑÕÇ÷≥Aõ0¬Ê◊0‡2Œ>nÚ˚õ‹f˝—Ÿ¬16q3∑ù’¬î]+äa˙rÎFŸ‚x6	S-3eô+ÅxŸ˚Ã§”Û/jÒhD\rïΩ-\nì—òîìG7ôÄ©Çz2ií‘Ù.∑A9◊–f`≤Yô≥TÊxÚ9ﬂ≈Î¥\"^\\÷nÎÈË›£s¿9ÃÒ¬œ¬Î{0sö83‰\$ò:#Ç˝3–›Y˚6Ø{0¯\nÛJ\$Á#D©\\Œƒº¢ôú—ü@‚É–éê3u§0ΩÁ∞\"*àÖ.rs££ÊÿõôË∆ËêÂ5íÌÈ»G_»éD◊dH∏Km]»Ã‡\\4\0;d}ê§[S2‹ú›Ó«◊}ﬁûì˜™Kdó& t»rf	*j +…Pxó•‹ç\rêò7ÀM8A∂[#ÿ‘mÜó\n–\nßÄØ9°ˆ+˛Z¬ñ’Hõ|H[™Ä_™≈∫Ü|êö¢j5H•|∫ÈﬂU1Ñ’^´u]´·P L`Xºgh Ú_r˝…ósÂmÊZ:l]ihÕsóKËÁÜ>πùöˆeØc9¿»p7°jëCäÌLàÄ¥Rp``§¿Ê¿Ω¥†");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF87a\0\0°\0\0ÓÓÓ\0\0\0ôôô\0\0\0,\0\0\0\0\0\0\0!Ñè©ÀÌMÒÃ*)æo˙Ø) qï°eàµÓ#ƒÚLÀ\0;";break;case"cross.gif":echo"GIF87a\0\0°\0\0ÓÓÓ\0\0\0ôôô\0\0\0,\0\0\0\0\0\0\0#Ñè©ÀÌ#\na÷Fo~y√.Å_waî·1Á±JÓG¬L◊6]\0\0;";break;case"up.gif":echo"GIF87a\0\0°\0\0ÓÓÓ\0\0\0ôôô\0\0\0,\0\0\0\0\0\0\0 Ñè©ÀÌMQN\nÔ}Ùûa8äyöa≈∂Æ\0«Ú\0;";break;case"down.gif":echo"GIF87a\0\0°\0\0ÓÓÓ\0\0\0ôôô\0\0\0,\0\0\0\0\0\0\0 Ñè©ÀÌMÒÃ*)æ[W˛\\¢«L&Ÿú∆∂ï\0«Ú\0;";break;case"arrow.gif":echo"GIF89a\0\n\0Ä\0\0ÄÄÄˇˇˇ!˘\0\0\0,\0\0\0\0\0\n\0\0Çiñ±ãûî™”≤ﬁª\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($r){$nd=substr($r,-1);return
str_replace($nd.$nd,$nd,substr($r,1,-1));}function
escape_string($W){return
substr(q($W),1,-1);}function
remove_slashes($Te,$qc=false){if(get_magic_quotes_gpc()){while(list($v,$W)=each($Te)){foreach($W
as$gd=>$V){unset($Te[$v][$gd]);if(is_array($V)){$Te[$v][stripslashes($gd)]=$V;$Te[]=&$Te[$v][stripslashes($gd)];}else$Te[$v][stripslashes($gd)]=($qc?$V:stripslashes($V));}}}}function
bracket_escape($r,$Ba=false){static$sg=array(':'=>':1',']'=>':2','['=>':3');return
strtr($r,($Ba?array_flip($sg):$sg));}function
h($N){return
htmlspecialchars(str_replace("\0","",$N),ENT_QUOTES);}function
nbsp($N){return(trim($N)!=""?h($N):"&nbsp;");}function
nl_br($N){return
str_replace("\n","<br>",$N);}function
checkbox($A,$X,$Oa,$ld="",$ge="",$Ra=""){$H="<input type='checkbox' name='$A' value='".h($X)."'".($Oa?" checked":"").($ge?' onclick="'.h($ge).'"':'').">";return($ld!=""||$Ra?"<label".($Ra?" class='$Ra'":"").">$H".h($ld)."</label>":$H);}function
optionlist($ke,$yf=null,$Lg=false){$H="";foreach($ke
as$gd=>$V){$le=array($gd=>$V);if(is_array($V)){$H.='<optgroup label="'.h($gd).'">';$le=$V;}foreach($le
as$v=>$W)$H.='<option'.($Lg||is_string($v)?' value="'.h($v).'"':'').(($Lg||is_string($v)?(string)$v:$W)===$yf?' selected':'').'>'.h($W);if(is_array($V))$H.='</optgroup>';}return$H;}function
html_select($A,$ke,$X="",$fe=true){if($fe)return"<select name='".h($A)."'".(is_string($fe)?' onchange="'.h($fe).'"':"").">".optionlist($ke,$X)."</select>";$H="";foreach($ke
as$v=>$W)$H.="<label><input type='radio' name='".h($A)."' value='".h($v)."'".($v==$X?" checked":"").">".h($W)."</label>";return$H;}function
confirm($ib=""){return" onclick=\"return confirm('".'Are you sure?'.($ib?" (' + $ib + ')":"")."');\"";}function
print_fieldset($q,$sd,$Tg=false,$ge=""){echo"<fieldset><legend><a href='#fieldset-$q' onclick=\"".h($ge)."return !toggle('fieldset-$q');\">$sd</a></legend><div id='fieldset-$q'".($Tg?"":" class='hidden'").">\n";}function
bold($Ia){return($Ia?" class='active'":"");}function
odd($H=' class="odd"'){static$p=0;if(!$H)$p=-1;return($p++%2?$H:'');}function
js_escape($N){return
addcslashes($N,"\r\n'\\/");}function
json_row($v,$W=null){static$rc=true;if($rc)echo"{";if($v!=""){echo($rc?"":",")."\n\t\"".addcslashes($v,"\r\n\"\\").'": '.($W!==null?'"'.addcslashes($W,"\r\n\"\\").'"':'undefined');$rc=false;}else{echo"\n}\n";$rc=true;}}function
ini_bool($Wc){$W=ini_get($Wc);return(eregi('^(on|true|yes)$',$W)||(int)$W);}function
sid(){static$H;if($H===null)$H=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$H;}function
q($N){global$g;return$g->quote($N);}function
get_vals($F,$e=0){global$g;$H=array();$G=$g->query($F);if(is_object($G)){while($I=$G->fetch_row())$H[]=$I[$e];}return$H;}function
get_key_vals($F,$h=null){global$g;if(!is_object($h))$h=$g;$H=array();$G=$h->query($F);if(is_object($G)){while($I=$G->fetch_row())$H[$I[0]]=$I[1];}return$H;}function
get_rows($F,$h=null,$k="<p class='error'>"){global$g;$db=(is_object($h)?$h:$g);$H=array();$G=$db->query($F);if(is_object($G)){while($I=$G->fetch_assoc())$H[]=$I;}elseif(!$G&&!is_object($h)&&$k&&defined("PAGE_HEADER"))echo$k.error()."\n";return$H;}function
unique_array($I,$t){foreach($t
as$s){if(ereg("PRIMARY|UNIQUE",$s["type"])){$H=array();foreach($s["columns"]as$v){if(!isset($I[$v]))continue
2;$H[$v]=$I[$v];}return$H;}}}function
where($Z,$m=array()){global$u;$H=array();$Bc='(^[\w\(]+'.str_replace("_",".*",preg_quote(idf_escape("_"))).'\)+$)';foreach((array)$Z["where"]as$v=>$W){$v=bracket_escape($v,1);$e=(preg_match($Bc,$v)?$v:idf_escape($v));$H[]=$e.(($u=="sql"&&ereg('^[0-9]*\\.[0-9]*$',$W))||$u=="mssql"?" LIKE ".q(addcslashes($W,"%_\\")):" = ".unconvert_field($m[$v],q($W)));if($u=="sql"&&ereg("[^ -@]",$W))$H[]="$e = ".q($W)." COLLATE utf8_bin";}foreach((array)$Z["null"]as$v)$H[]=(preg_match($Bc,$v)?$v:idf_escape($v))." IS NULL";return
implode(" AND ",$H);}function
where_check($W,$m=array()){parse_str($W,$Na);remove_slashes(array(&$Na));return
where($Na,$m);}function
where_link($p,$e,$X,$he="="){return"&where%5B$p%5D%5Bcol%5D=".urlencode($e)."&where%5B$p%5D%5Bop%5D=".urlencode(($X!==null?$he:"IS NULL"))."&where%5B$p%5D%5Bval%5D=".urlencode($X);}function
convert_fields($f,$m,$K=array()){$H="";foreach($f
as$v=>$W){if($K&&!in_array(idf_escape($v),$K))continue;$wa=convert_field($m[$v]);if($wa)$H.=", $wa AS ".idf_escape($v);}return$H;}function
cookie($A,$X){global$ba;$ye=array($A,(ereg("\n",$X)?"":$X),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$ye[]=true;return
call_user_func_array('setcookie',$ye);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($v){return$_SESSION[$v][DRIVER][SERVER][$_GET["username"]];}function
set_session($v,$W){$_SESSION[$v][DRIVER][SERVER][$_GET["username"]]=$W;}function
auth_url($Db,$L,$U,$j=null){global$Eb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Eb))."|username|".($j!==null?"db|":"").session_name()),$z);return"$z[1]?".(sid()?SID."&":"").($Db!="server"||$L!=""?urlencode($Db)."=".urlencode($L)."&":"")."username=".urlencode($U).($j!=""?"&db=".urlencode($j):"").($z[2]?"&$z[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($y,$_=null){if($_!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($y!==null?$y:$_SERVER["REQUEST_URI"]))][]=$_;}if($y!==null){if($y=="")$y=".";header("Location: $y");exit;}}function
query_redirect($F,$y,$_,$Ze=true,$dc=true,$kc=false){global$g,$k,$b;$ig="";if($dc){$Jf=microtime();$kc=!$g->query($F);$ig="; -- ".format_time($Jf,microtime());}$Hf="";if($F)$Hf=$b->messageQuery($F.$ig);if($kc){$k=error().$Hf;return
false;}if($Ze)redirect($y,$_.$Hf);return
true;}function
queries($F=null){global$g;static$We=array();if($F===null)return
implode("\n",$We);$Jf=microtime();$H=$g->query($F);$We[]=(ereg(';$',$F)?"DELIMITER ;;\n$F;\nDELIMITER ":$F)."; -- ".format_time($Jf,microtime());return$H;}function
apply_queries($F,$Q,$Yb='table'){foreach($Q
as$O){if(!queries("$F ".$Yb($O)))return
false;}return
true;}function
queries_redirect($y,$_,$Ze){return
query_redirect(queries(),$y,$_,$Ze,false,!$Ze);}function
format_time($Jf,$Sb){return
sprintf('%.3f s',max(0,array_sum(explode(" ",$Sb))-array_sum(explode(" ",$Jf))));}function
remove_from_uri($xe=""){return
substr(preg_replace("~(?<=[?&])($xe".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($C,$nb){return" ".($C==$nb?$C+1:'<a href="'.h(remove_from_uri("page").($C?"&page=$C":"")).'">'.($C+1)."</a>");}function
get_file($v,$ub=false){$oc=$_FILES[$v];if(!$oc)return
null;foreach($oc
as$v=>$W)$oc[$v]=(array)$W;$H='';foreach($oc["error"]as$v=>$k){if($k)return$k;$A=$oc["name"][$v];$pg=$oc["tmp_name"][$v];$eb=file_get_contents($ub&&ereg('\\.gz$',$A)?"compress.zlib://$pg":$pg);if($ub){$Jf=substr($eb,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$Jf,$gf))$eb=iconv("utf-16","utf-8",$eb);elseif($Jf=="\xEF\xBB\xBF")$eb=substr($eb,3);}$H.=$eb."\n\n";}return$H;}function
upload_error($k){$Ed=($k==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($k?'Unable to upload a file.'.($Ed?" ".sprintf('Maximum allowed file size is %sB.',$Ed):""):'File does not exist.');}function
repeat_pattern($Ee,$td){return
str_repeat("$Ee{0,65535}",$td/65535)."$Ee{0,".($td%65535)."}";}function
is_utf8($W){return(preg_match('~~u',$W)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$W));}function
shorten_utf8($N,$td=80,$Qf=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$td).")($)?)u",$N,$z))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$td).")($)?)",$N,$z);return
h($z[1]).$Qf.(isset($z[2])?"":"<i>...</i>");}function
friendly_url($W){return
preg_replace('~[^a-z0-9_]~i','-',$W);}function
hidden_fields($Te,$Pc=array()){while(list($v,$W)=each($Te)){if(is_array($W)){foreach($W
as$gd=>$V)$Te[$v."[$gd]"]=$V;}elseif(!in_array($v,$Pc))echo'<input type="hidden" name="'.h($v).'" value="'.h($W).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($O,$lc=false){$H=table_status($O,$lc);return($H?$H:array("Name"=>$O));}function
column_foreign_keys($O){global$b;$H=array();foreach($b->foreignKeys($O)as$n){foreach($n["source"]as$W)$H[$W][]=$n;}return$H;}function
enum_input($S,$ya,$l,$X,$Rb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$_d);$H=($Rb!==null?"<label><input type='$S'$ya value='$Rb'".((is_array($X)?in_array($Rb,$X):$X===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($_d[1]as$p=>$W){$W=stripcslashes(str_replace("''","'",$W));$Oa=(is_int($X)?$X==$p+1:(is_array($X)?in_array($p+1,$X):$X===$W));$H.=" <label><input type='$S'$ya value='".($p+1)."'".($Oa?' checked':'').'>'.h($b->editVal($W,$l)).'</label>';}return$H;}function
input($l,$X,$o){global$g,$T,$b,$u;$A=h(bracket_escape($l["field"]));echo"<td class='function'>";$jf=($u=="mssql"&&$l["auto_increment"]);if($jf&&!$_POST["save"])$o=null;$Cc=(isset($_GET["select"])||$jf?array("orig"=>'original'):array())+$b->editFunctions($l);$ya=" name='fields[$A]'";if($l["type"]=="enum")echo
nbsp($Cc[""])."<td>".$b->editInput($_GET["edit"],$l,$ya,$X);else{$rc=0;foreach($Cc
as$v=>$W){if($v===""||!$W)break;$rc++;}$fe=($rc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($l["field"])))."]']; if ($rc > f.selectedIndex) f.selectedIndex = $rc;\"":"");$ya.=$fe;echo(count($Cc)>1?html_select("function[$A]",$Cc,$o===null||in_array($o,$Cc)||isset($Cc[$o])?$o:"","functionChange(this);"):nbsp(reset($Cc))).'<td>';$Yc=$b->editInput($_GET["edit"],$l,$ya,$X);if($Yc!="")echo$Yc;elseif($l["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$_d);foreach($_d[1]as$p=>$W){$W=stripcslashes(str_replace("''","'",$W));$Oa=(is_int($X)?($X>>$p)&1:in_array($W,explode(",",$X),true));echo" <label><input type='checkbox' name='fields[$A][$p]' value='".(1<<$p)."'".($Oa?' checked':'')."$fe>".h($b->editVal($W,$l)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$l["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$A'$fe>";elseif(($gg=ereg('text|lob',$l["type"]))||ereg("\n",$X)){if($gg&&$u!="sqlite")$ya.=" cols='50' rows='12'";else{$J=min(12,substr_count($X,"\n")+1);$ya.=" cols='30' rows='$J'".($J==1?" style='height: 1.2em;'":"");}echo"<textarea$ya>".h($X).'</textarea>';}else{$Gd=(!ereg('int',$l["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$l["length"],$z)?((ereg("binary",$l["type"])?2:1)*$z[1]+($z[3]?1:0)+($z[2]&&!$l["unsigned"]?1:0)):($T[$l["type"]]?$T[$l["type"]]+($l["unsigned"]?0:1):0));if($u=='sql'&&$g->server_info>=5.6&&ereg('time',$l["type"]))$Gd+=7;echo"<input".(ereg('int',$l["type"])?" type='number'":"")." value='".h($X)."'".($Gd?" maxlength='$Gd'":"").(ereg('char|binary',$l["type"])&&$Gd>20?" size='40'":"")."$ya>";}}}function
process_input($l){global$b;$r=bracket_escape($l["field"]);$o=$_POST["function"][$r];$X=$_POST["fields"][$r];if($l["type"]=="enum"){if($X==-1)return
false;if($X=="")return"NULL";return+$X;}if($l["auto_increment"]&&$X=="")return
null;if($o=="orig")return($l["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($l["field"]):false);if($o=="NULL")return"NULL";if($l["type"]=="set")return
array_sum((array)$X);if(ereg('blob|bytea|raw|file',$l["type"])&&ini_bool("file_uploads")){$oc=get_file("fields-$r");if(!is_string($oc))return
false;return
q($oc);}return$b->processInput($l,$X,$o);}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$xc=false;foreach(table_status('',true)as$O=>$P){$A=$b->tableName($P);if(isset($P["Engine"])&&$A!=""&&(!$_POST["tables"]||in_array($O,$_POST["tables"]))){$G=$g->query("SELECT".limit("1 FROM ".table($O)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($O),array())),1));if(!$G||$G->fetch_row()){if(!$xc){echo"<ul>\n";$xc=true;}echo"<li>".($G?"<a href='".h(ME."select=".urlencode($O)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$A</a>\n":"$A: <span class='error'>".error()."</span>\n");}}}echo($xc?"</ul>":"<p class='message'>".'No tables.')."\n";}function
dump_headers($Oc,$Od=false){global$b;$H=$b->dumpHeaders($Oc,$Od);$ve=$_POST["output"];if($ve!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($Oc).".$H".($ve!="file"&&!ereg('[^0-9a-z]',$ve)?".$ve":""));session_write_close();ob_flush();flush();return$H;}function
dump_csv($I){foreach($I
as$v=>$W){if(preg_match("~[\"\n,;\t]~",$W)||$W==="")$I[$v]='"'.str_replace('"','""',$W).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$I)."\r\n";}function
apply_sql_function($o,$e){return($o?($o=="unixepoch"?"DATETIME($e, '$o')":($o=="count distinct"?"COUNT(DISTINCT ":strtoupper("$o("))."$e)"):$e);}function
password_file($jb){$Ab=ini_get("upload_tmp_dir");if(!$Ab){if(function_exists('sys_get_temp_dir'))$Ab=sys_get_temp_dir();else{$pc=@tempnam("","");if(!$pc)return
false;$Ab=dirname($pc);unlink($pc);}}$pc="$Ab/adminer.key";$H=@file_get_contents($pc);if($H||!$jb)return$H;$zc=@fopen($pc,"w");if($zc){$H=md5(uniqid(mt_rand(),true));fwrite($zc,$H);fclose($zc);}return$H;}function
is_mail($Ob){$xa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Cb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$Ee="$xa+(\\.$xa+)*@($Cb?\\.)+$Cb";return
preg_match("(^$Ee(,\\s*$Ee)*\$)i",$Ob);}function
is_url($N){$Cb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Cb?\\.)+$Cb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$N,$z)?strtolower($z[1]):"");}function
is_shortable($l){return
ereg('char|text|lob|geometry|point|linestring|polygon',$l["type"]);}function
slow_query($F){global$b,$R;$j=$b->database();if(support("kill")&&is_object($h=connect())&&($j==""||$h->select_db($j))){$jd=$h->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$R,'&kill=',$jd,'\');
}, ',1000*$b->queryTimeout(),');
</script>
';}else$h=null;ob_flush();flush();$H=@get_key_vals($F,$h);if($h){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($H);}function
lzw_decompress($Fa){$_b=256;$Ga=8;$Ta=array();$kf=0;$lf=0;for($p=0;$p<strlen($Fa);$p++){$kf=($kf<<8)+ord($Fa[$p]);$lf+=8;if($lf>=$Ga){$lf-=$Ga;$Ta[]=$kf>>$lf;$kf&=(1<<$lf)-1;$_b++;if($_b>>$Ga)$Ga++;}}$zb=range("\0","\xFF");$H="";foreach($Ta
as$p=>$Sa){$Nb=$zb[$Sa];if(!isset($Nb))$Nb=$Xg.$Xg[0];$H.=$Nb;if($p)$zb[]=$Xg.$Nb[0];$Xg=$Nb;}return$H;}global$b,$g,$Eb,$Lb,$Vb,$k,$Cc,$Hc,$ba,$Xc,$u,$ca,$md,$ee,$Fe,$Nf,$R,$ug,$T,$Hg,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$ye=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$ye[]=true;call_user_func_array('session_set_cookie_params',$ye);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$qc);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'en';}function
lang($tg,$Wd=null){if(is_array($tg)){$He=($Wd==1?0:1);$tg=$tg[$He];}$tg=str_replace("%d","%s",$tg);$Wd=number_format($Wd,0,".",',');return
sprintf($tg,$Wd);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$He=array_search("SQL",$b->operators);if($He!==false)unset($b->operators[$He]);}function
dsn($Ib,$U,$D,$cc='auth_error'){set_exception_handler($cc);parent::__construct($Ib,$U,$D);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($F,$Bg=false){$G=parent::query($F);$this->error="";if(!$G){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($G);return$G;}function
multi_query($F){return$this->_result=$this->query($F);}function
store_result($G=null){if(!$G){$G=$this->_result;if(!$G)return
false;}if($G->columnCount()){$G->num_rows=$G->rowCount();return$G;}$this->affected_rows=$G->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($F,$l=0){$G=$this->query($F);if(!$G)return
false;$I=$G->fetch();return$I[$l];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$I=(object)$this->getColumnMeta($this->_offset++);$I->orgtable=$I->table;$I->orgname=$I->name;$I->charsetnr=(in_array("blob",(array)$I->flags)?63:0);return$I;}}}$Eb=array();$Eb["sqlite"]="SQLite 3";$Eb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Ke=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
Min_SQLite($pc){$this->_link=new
SQLite3($pc);$Rg=$this->_link->version();$this->server_info=$Rg["versionString"];}function
query($F){$G=@$this->_link->query($F);$this->error="";if(!$G){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($G->numColumns())return
new
Min_Result($G);$this->affected_rows=$this->_link->changes();return
true;}function
quote($N){return(is_utf8($N)?"'".$this->_link->escapeString($N)."'":"x'".reset(unpack('H*',$N))."'");}function
store_result(){return$this->_result;}function
result($F,$l=0){$G=$this->query($F);if(!is_object($G))return
false;$I=$G->_result->fetchArray();return$I[$l];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($G){$this->_result=$G;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$e=$this->_offset++;$S=$this->_result->columnType($e);return(object)array("name"=>$this->_result->columnName($e),"type"=>$S,"charsetnr"=>($S==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($pc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($pc);}function
query($F,$Bg=false){$Ld=($Bg?"unbufferedQuery":"query");$G=@$this->_link->$Ld($F,SQLITE_BOTH,$k);$this->error="";if(!$G){$this->error=$k;return
false;}elseif($G===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($G);}function
quote($N){return"'".sqlite_escape_string($N)."'";}function
store_result(){return$this->_result;}function
result($F,$l=0){$G=$this->query($F);if(!is_object($G))return
false;$I=$G->_result->fetch();return$I[$l];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($G){$this->_result=$G;if(method_exists($G,'numRows'))$this->num_rows=$G->numRows();}function
fetch_assoc(){$I=$this->_result->fetch(SQLITE_ASSOC);if(!$I)return
false;$H=array();foreach($I
as$v=>$W)$H[($v[0]=='"'?idf_unescape($v):$v)]=$W;return$H;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$A=$this->_result->fieldName($this->_offset++);$Ee='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($Ee\\.)?$Ee\$~",$A,$z)){$O=($z[3]!=""?$z[3]:idf_unescape($z[2]));$A=($z[5]!=""?$z[5]:idf_unescape($z[4]));}return(object)array("name"=>$A,"orgname"=>$A,"orgtable"=>$O,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($pc){$this->dsn(DRIVER.":$pc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($pc){if(is_readable($pc)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\\\]|:)",$pc)?$pc:dirname($_SERVER["SCRIPT_FILENAME"])."/$pc")." AS a")){$this->Min_SQLite($pc);return
true;}return
false;}function
multi_query($F){return$this->_result=$this->query($F);}function
next_result(){return
false;}}}function
idf_escape($r){return'"'.str_replace('"','""',$r).'"';}function
table($r){return
idf_escape($r);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($F,$Z,$w,$B=0,$_f=" "){return" $F$Z".($w!==null?$_f."LIMIT $w".($B?" OFFSET $B":""):"");}function
limit1($F,$Z){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($F,$Z,1):" $F$Z");}function
db_collation($j,$Wa){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($i){return
array();}function
table_status($A=""){global$g;$H=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($A!=""?"AND name = ".q($A):"ORDER BY name"))as$I){$I["Oid"]=1;$I["Auto_increment"]="";$I["Rows"]=$g->result("SELECT COUNT(*) FROM ".idf_escape($I["Name"]));$H[$I["Name"]]=$I;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$I)$H[$I["name"]]["Auto_increment"]=$I["seq"];return($A!=""?$H[$A]:$H);}function
is_view($P){return$P["Engine"]=="view";}function
fk_support($P){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($O){$H=array();foreach(get_rows("PRAGMA table_info(".table($O).")")as$I){$S=strtolower($I["type"]);$vb=$I["dflt_value"];$H[$I["name"]]=array("field"=>$I["name"],"type"=>(eregi("int",$S)?"integer":(eregi("char|clob|text",$S)?"text":(eregi("blob",$S)?"blob":(eregi("real|floa|doub",$S)?"real":"numeric")))),"full_type"=>$S,"default"=>(ereg("'(.*)'",$vb,$z)?str_replace("''","'",$z[1]):($vb=="NULL"?null:$vb)),"null"=>!$I["notnull"],"auto_increment"=>eregi('^integer$',$S)&&$I["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$I["pk"],);}return$H;}function
indexes($O,$h=null){$H=array();$Ne=array();foreach(fields($O)as$l){if($l["primary"])$Ne[]=$l["field"];}if($Ne)$H[""]=array("type"=>"PRIMARY","columns"=>$Ne,"lengths"=>array());$If=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($O));foreach(get_rows("PRAGMA index_list(".table($O).")")as$I){$A=$I["name"];if(!ereg("^sqlite_",$A)){$H[$A]["type"]=($I["unique"]?"UNIQUE":"INDEX");$H[$A]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($A).")")as$sf)$H[$A]["columns"][]=$sf["name"];$H[$A]["descs"]=array();if(eregi('^CREATE( UNIQUE)? INDEX '.quotemeta(idf_escape($A).' ON '.idf_escape($O)).' \((.*)\)$',$If[$A],$gf)){preg_match_all('/("[^"]*+")+( DESC)?/',$gf[2],$_d);foreach($_d[2]as$W)$H[$A]["descs"][]=($W?'1':null);}}}return$H;}function
foreign_keys($O){$H=array();foreach(get_rows("PRAGMA foreign_key_list(".table($O).")")as$I){$n=&$H[$I["id"]];if(!$n)$n=$I;$n["source"][]=$I["from"];$n["target"][]=$I["to"];}return$H;}function
view($A){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($A))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($j){return
false;}function
error(){global$g;return
h($g->error);}function
check_sqlite_name($A){global$g;$jc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($jc)\$~",$A)){$g->error=sprintf('Please use one of the extensions %s.',str_replace("|",", ",$jc));return
false;}return
true;}function
create_database($j,$d){global$g;if(file_exists($j)){$g->error='File exists.';return
false;}if(!check_sqlite_name($j))return
false;$x=new
Min_SQLite($j);$x->query('PRAGMA encoding = "UTF-8"');$x->query('CREATE TABLE adminer (i)');$x->query('DROP TABLE adminer');return
true;}function
drop_databases($i){global$g;$g->Min_SQLite(":memory:");foreach($i
as$j){if(!@unlink($j)){$g->error='File exists.';return
false;}}return
true;}function
rename_database($A,$d){global$g;if(!check_sqlite_name($A))return
false;$g->Min_SQLite(":memory:");$g->error='File exists.';return@rename(DB,$A);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($O,$A,$m,$tc,$ab,$Tb,$d,$_a,$Be){$Kg=($O==""||$tc);foreach($m
as$l){if($l[0]!=""||!$l[1]||$l[2]){$Kg=true;break;}}$c=array();$te=array();$Oe=false;foreach($m
as$l){if($l[1]){if($l[1][6])$Oe=true;$c[]=($Kg?"  ":"ADD ").implode($l[1]);if($l[0]!="")$te[$l[0]]=$l[1][0];}}if($Kg){if($O!=""){queries("BEGIN");foreach(foreign_keys($O)as$n){$f=array();foreach($n["source"]as$e){if(!$te[$e])continue
2;$f[]=$te[$e];}$tc[]="  FOREIGN KEY (".implode(", ",$f).") REFERENCES ".table($n["table"])." (".implode(", ",array_map('idf_escape',$n["target"])).") ON DELETE $n[on_delete] ON UPDATE $n[on_update]";}$t=array();foreach(indexes($O)as$hd=>$s){$f=array();foreach($s["columns"]as$e){if(!$te[$e])continue
2;$f[]=$te[$e];}$f="(".implode(", ",$f).")";if($s["type"]!="PRIMARY")$t[]=array($s["type"],$hd,$f);elseif(!$Oe)$tc[]="  PRIMARY KEY $f";}}$c=array_merge($c,$tc);if(!queries("CREATE TABLE ".table($O!=""?"adminer_$A":$A)." (\n".implode(",\n",$c)."\n)"))return
false;if($O!=""){if($te&&!queries("INSERT INTO ".table("adminer_$A")." (".implode(", ",$te).") SELECT ".implode(", ",array_map('idf_escape',array_keys($te)))." FROM ".table($O)))return
false;$zg=array();foreach(triggers($O)as$xg=>$jg){$vg=trigger($xg);$zg[]="CREATE TRIGGER ".idf_escape($xg)." ".implode(" ",$jg)." ON ".table($A)."\n$vg[Statement]";}if(!queries("DROP TABLE ".table($O)))return
false;queries("ALTER TABLE ".table("adminer_$A")." RENAME TO ".table($A));if(!alter_indexes($A,$t))return
false;foreach($zg
as$vg){if(!queries($vg))return
false;}queries("COMMIT");}}else{foreach($c
as$W){if(!queries("ALTER TABLE ".table($O)." $W"))return
false;}if($O!=$A&&!queries("ALTER TABLE ".table($O)." RENAME TO ".table($A)))return
false;}if($_a)queries("UPDATE sqlite_sequence SET seq = $_a WHERE name = ".q($A));return
true;}function
index_sql($O,$S,$A,$f){return"CREATE $S ".($S!="INDEX"?"INDEX ":"").idf_escape($A!=""?$A:uniqid($O."_"))." ON ".table($O)." $f";}function
alter_indexes($O,$c){foreach(array_reverse($c)as$W){if(!queries($W[2]=="DROP"?"DROP INDEX ".idf_escape($W[1]):index_sql($O,$W[0],$W[1],$W[2])))return
false;}return
true;}function
truncate_tables($Q){return
apply_queries("DELETE FROM",$Q);}function
drop_views($Y){return
apply_queries("DROP VIEW",$Y);}function
drop_tables($Q){return
apply_queries("DROP TABLE",$Q);}function
move_tables($Q,$Y,$cg){return
false;}function
trigger($A){global$g;if($A=="")return
array("Statement"=>"BEGIN\n\t;\nEND");preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($A)),$z);return
array("Timing"=>strtoupper($z[1]),"Event"=>strtoupper($z[2]),"Trigger"=>$A,"Statement"=>$z[3]);}function
triggers($O){$H=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($O))as$I){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$I["sql"],$z);$H[$I["name"]]=array($z[1],$z[2]);}return$H;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($A,$S){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
insert_into($O,$M){return
queries("INSERT INTO ".table($O).($M?" (".implode(", ",array_keys($M)).")\nVALUES (".implode(", ",$M).")":"DEFAULT VALUES"));}function
insert_update($O,$M,$Ne){return
queries("REPLACE INTO ".table($O)." (".implode(", ",array_keys($M)).") VALUES (".implode(", ",$M).")");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$F){return$g->query("EXPLAIN $F");}function
found_rows($P,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($wf){return
true;}function
create_sql($O,$_a){global$g;$H=$g->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($O));foreach(indexes($O)as$A=>$s){if($A=='')continue;$H.=";\n\n".index_sql($O,$s['type'],$A,"(".implode(", ",array_map('idf_escape',$s['columns'])).")");}return$H;}function
truncate_sql($O){return"DELETE FROM ".table($O);}function
use_sql($qb){}function
trigger_sql($O,$Of){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($O)));}function
show_variables(){global$g;$H=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$v)$H[$v]=$g->result("PRAGMA $v");return$H;}function
show_status(){$H=array();foreach(get_vals("PRAGMA compile_options")as$je){list($v,$W)=explode("=",$je,2);$H[$v]=$W;}return$H;}function
convert_field($l){}function
unconvert_field($l,$H){return$H;}function
support($mc){return
ereg('^(view|trigger|variables|status|dump|move_col|drop_col)$',$mc);}$u="sqlite";$T=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Nf=array_keys($T);$Hg=array();$ie=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$Cc=array("hex","length","lower","round","unixepoch","upper");$Hc=array("avg","count","count distinct","group_concat","max","min","sum");$Lb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Eb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Ke=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($Wb,$k){if(ini_bool("html_errors"))$k=html_entity_decode(strip_tags($k));$k=ereg_replace('^[^:]*: ','',$k);$this->error=$k;}function
connect($L,$U,$D){global$b;$j=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($L,"'\\"))."' user='".addcslashes($U,"'\\")."' password='".addcslashes($D,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($j!=""?addcslashes($j,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$j!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Rg=pg_version($this->_link);$this->server_info=$Rg["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($N){return"'".pg_escape_string($this->_link,$N)."'";}function
select_db($qb){global$b;if($qb==$b->database())return$this->_database;$H=@pg_connect("$this->_string dbname='".addcslashes($qb,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($H)$this->_link=$H;return$H;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($F,$Bg=false){$G=@pg_query($this->_link,$F);$this->error="";if(!$G){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($G)){$this->affected_rows=pg_affected_rows($G);return
true;}return
new
Min_Result($G);}function
multi_query($F){return$this->_result=$this->query($F);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($F,$l=0){$G=$this->query($F);if(!$G||!$G->num_rows)return
false;return
pg_fetch_result($G->_result,0,$l);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($G){$this->_result=$G;$this->num_rows=pg_num_rows($G);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$e=$this->_offset++;$H=new
stdClass;if(function_exists('pg_field_table'))$H->orgtable=pg_field_table($this->_result,$e);$H->name=pg_field_name($this->_result,$e);$H->orgname=$H->name;$H->type=pg_field_type($this->_result,$e);$H->charsetnr=($H->type=="bytea"?63:0);return$H;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($L,$U,$D){global$b;$j=$b->database();$N="pgsql:host='".str_replace(":","' port='",addcslashes($L,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$N dbname='".($j!=""?addcslashes($j,"'\\"):"postgres")."'",$U,$D);return
true;}function
select_db($qb){global$b;return($b->database()==$qb);}function
close(){}}}function
idf_escape($r){return'"'.str_replace('"','""',$r).'"';}function
table($r){return
idf_escape($r);}function
connect(){global$b;$g=new
Min_DB;$mb=$b->credentials();if($g->connect($mb[0],$mb[1],$mb[2])){if($g->server_info>=9)$g->query("SET application_name = 'Adminer'");return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($F,$Z,$w,$B=0,$_f=" "){return" $F$Z".($w!==null?$_f."LIMIT $w".($B?" OFFSET $B":""):"");}function
limit1($F,$Z){return" $F$Z";}function
db_collation($j,$Wa){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($i){return
array();}function
table_status($A=""){$H=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids::int AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
".($A!=""?"AND relname = ".q($A):"ORDER BY relname"))as$I)$H[$I["Name"]]=$I;return($A!=""?$H[$A]:$H);}function
is_view($P){return$P["Engine"]=="view";}function
fk_support($P){return
true;}function
fields($O){$H=array();$ua=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($O)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$I){$S=$I["full_type"];if(ereg('(.+)\\((.*)\\)$',$I["full_type"],$z))list(,$S,$I["length"])=$z;$I["type"]=($ua[$S]?$ua[$S]:$S);$I["full_type"]=$I["type"].($I["length"]?"($I[length])":"");$I["null"]=!$I["attnotnull"];$I["auto_increment"]=eregi("^nextval\\(",$I["default"]);$I["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~^(.*)::.+$~',$I["default"],$z))$I["default"]=($z[1][0]=="'"?idf_unescape($z[1]):$z[1]);$H[$I["field"]]=$I;}return$H;}function
indexes($O,$h=null){global$g;if(!is_object($h))$h=$g;$H=array();$Wf=$h->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($O));$f=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Wf AND attnum > 0",$h);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption FROM pg_index i, pg_class ci WHERE i.indrelid = $Wf AND ci.oid = i.indexrelid",$h)as$I){$hf=$I["relname"];$H[$hf]["type"]=($I["indisprimary"]?"PRIMARY":($I["indisunique"]?"UNIQUE":"INDEX"));$H[$hf]["columns"]=array();foreach(explode(" ",$I["indkey"])as$Tc)$H[$hf]["columns"][]=$f[$Tc];$H[$hf]["descs"]=array();foreach(explode(" ",$I["indoption"])as$Uc)$H[$hf]["descs"][]=($Uc&1?'1':null);$H[$hf]["lengths"]=array();}return$H;}function
foreign_keys($O){global$ee;$H=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($O)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$I){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$I['definition'],$z)){$I['source']=array_map('trim',explode(',',$z[1]));$I['table']=$z[2];if(preg_match('~(.+)\.(.+)~',$z[2],$zd)){$I['ns']=$zd[1];$I['table']=$zd[2];}$I['target']=array_map('trim',explode(',',$z[3]));$I['on_delete']=(preg_match("~ON DELETE ($ee)~",$z[4],$zd)?$zd[1]:'NO ACTION');$I['on_update']=(preg_match("~ON UPDATE ($ee)~",$z[4],$zd)?$zd[1]:'NO ACTION');$H[$I['conname']]=$I;}}return$H;}function
view($A){global$g;return
array("select"=>$g->result("SELECT pg_get_viewdef(".q($A).")"));}function
collations(){return
array();}function
information_schema($j){return($j=="information_schema");}function
error(){global$g;$H=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$H,$z))$H=$z[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($z[3]).'})(.*)~','\\1<b>\\2</b>',$z[2]).$z[4];return
nl_br($H);}function
create_database($j,$d){return
queries("CREATE DATABASE ".idf_escape($j).($d?" ENCODING ".idf_escape($d):""));}function
drop_databases($i){global$g;$g->close();return
apply_queries("DROP DATABASE",$i,'idf_escape');}function
rename_database($A,$d){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($A));}function
auto_increment(){return"";}function
alter_table($O,$A,$m,$tc,$ab,$Tb,$d,$_a,$Be){$c=array();$We=array();foreach($m
as$l){$e=idf_escape($l[0]);$W=$l[1];if(!$W)$c[]="DROP $e";else{$Og=$W[5];unset($W[5]);if(isset($W[6])&&$l[0]=="")$W[1]=($W[1]=="bigint"?" big":" ")."serial";if($l[0]=="")$c[]=($O!=""?"ADD ":"  ").implode($W);else{if($e!=$W[0])$We[]="ALTER TABLE ".table($O)." RENAME $e TO $W[0]";$c[]="ALTER $e TYPE$W[1]";if(!$W[6]){$c[]="ALTER $e ".($W[3]?"SET$W[3]":"DROP DEFAULT");$c[]="ALTER $e ".($W[2]==" NULL"?"DROP NOT":"SET").$W[2];}}if($l[0]!=""||$Og!="")$We[]="COMMENT ON COLUMN ".table($O).".$W[0] IS ".($Og!=""?substr($Og,9):"''");}}$c=array_merge($c,$tc);if($O=="")array_unshift($We,"CREATE TABLE ".table($A)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($We,"ALTER TABLE ".table($O)."\n".implode(",\n",$c));if($O!=""&&$O!=$A)$We[]="ALTER TABLE ".table($O)." RENAME TO ".table($A);if($O!=""||$ab!="")$We[]="COMMENT ON TABLE ".table($A)." IS ".q($ab);if($_a!=""){}foreach($We
as$F){if(!queries($F))return
false;}return
true;}function
alter_indexes($O,$c){$jb=array();$Fb=array();$We=array();foreach($c
as$W){if($W[0]!="INDEX")$jb[]=($W[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($W[1]):"\nADD".($W[1]!=""?" CONSTRAINT ".idf_escape($W[1]):"")." $W[0] ".($W[0]=="PRIMARY"?"KEY ":"").$W[2]);elseif($W[2]=="DROP")$Fb[]=idf_escape($W[1]);else$We[]="CREATE INDEX ".idf_escape($W[1]!=""?$W[1]:uniqid($O."_"))." ON ".table($O)." $W[2]";}if($jb)array_unshift($We,"ALTER TABLE ".table($O).implode(",",$jb));if($Fb)array_unshift($We,"DROP INDEX ".implode(", ",$Fb));foreach($We
as$F){if(!queries($F))return
false;}return
true;}function
truncate_tables($Q){return
queries("TRUNCATE ".implode(", ",array_map('table',$Q)));return
true;}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($Q){return
queries("DROP TABLE ".implode(", ",array_map('table',$Q)));}function
move_tables($Q,$Y,$cg){foreach($Q
as$O){if(!queries("ALTER TABLE ".table($O)." SET SCHEMA ".idf_escape($cg)))return
false;}foreach($Y
as$O){if(!queries("ALTER VIEW ".table($O)." SET SCHEMA ".idf_escape($cg)))return
false;}return
true;}function
trigger($A){if($A=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$J=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($A));return
reset($J);}function
triggers($O){$H=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($O))as$I)$H[$I["trigger_name"]]=array($I["condition_timing"],$I["event_manipulation"]);return$H;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
begin(){return
queries("BEGIN");}function
insert_into($O,$M){return
queries("INSERT INTO ".table($O).($M?" (".implode(", ",array_keys($M)).")\nVALUES (".implode(", ",$M).")":"DEFAULT VALUES"));}function
insert_update($O,$M,$Ne){global$g;$Ig=array();$Z=array();foreach($M
as$v=>$W){$Ig[]="$v = $W";if(isset($Ne[idf_unescape($v)]))$Z[]="$v = $W";}return($Z&&queries("UPDATE ".table($O)." SET ".implode(", ",$Ig)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($O)." (".implode(", ",array_keys($M)).") VALUES (".implode(", ",$M).")");}function
last_id(){return
0;}function
explain($g,$F){return$g->query("EXPLAIN $F");}function
found_rows($P,$Z){global$g;if(ereg(" rows=([0-9]+)",$g->result("EXPLAIN SELECT * FROM ".idf_escape($P["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$gf))return$gf[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($vf){global$g,$T,$Nf;$H=$g->query("SET search_path TO ".idf_escape($vf));foreach(types()as$S){if(!isset($T[$S])){$T[$S]=0;$Nf['User types'][]=$S;}}return$H;}function
use_sql($qb){return"\connect ".idf_escape($qb);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$g;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($g->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($l){}function
unconvert_field($l,$H){return$H;}function
support($mc){return
ereg('^(comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$',$mc);}$u="pgsql";$T=array();$Nf=array();foreach(array('Numbers'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Date and time'=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),'Strings'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'Binary'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'Network'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometry'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$v=>$W){$T+=$W;$Nf[$v]=array_keys($W);}$Hg=array();$ie=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Cc=array("char_length","lower","round","to_hex","to_timestamp","upper");$Hc=array("avg","count","count distinct","max","min","sum");$Lb=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Eb["oracle"]="Oracle";if(isset($_GET["oracle"])){$Ke=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($Wb,$k){if(ini_bool("html_errors"))$k=html_entity_decode(strip_tags($k));$k=ereg_replace('^[^:]*: ','',$k);$this->error=$k;}function
connect($L,$U,$D){$this->_link=@oci_new_connect($U,$D,$L,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$k=oci_error();$this->error=$k["message"];return
false;}function
quote($N){return"'".str_replace("'","''",$N)."'";}function
select_db($qb){return
true;}function
query($F,$Bg=false){$G=oci_parse($this->_link,$F);$this->error="";if(!$G){$k=oci_error($this->_link);$this->errno=$k["code"];$this->error=$k["message"];return
false;}set_error_handler(array($this,'_error'));$H=@oci_execute($G);restore_error_handler();if($H){if(oci_num_fields($G))return
new
Min_Result($G);$this->affected_rows=oci_num_rows($G);}return$H;}function
multi_query($F){return$this->_result=$this->query($F);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($F,$l=1){$G=$this->query($F);if(!is_object($G)||!oci_fetch($G->_result))return
false;return
oci_result($G->_result,$l);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($G){$this->_result=$G;}function
_convert($I){foreach((array)$I
as$v=>$W){if(is_a($W,'OCI-Lob'))$I[$v]=$W->load();}return$I;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$e=$this->_offset++;$H=new
stdClass;$H->name=oci_field_name($this->_result,$e);$H->orgname=$H->name;$H->type=oci_field_type($this->_result,$e);$H->charsetnr=(ereg("raw|blob|bfile",$H->type)?63:0);return$H;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($L,$U,$D){$this->dsn("oci:dbname=//$L;charset=AL32UTF8",$U,$D);return
true;}function
select_db($qb){return
true;}}}function
idf_escape($r){return'"'.str_replace('"','""',$r).'"';}function
table($r){return
idf_escape($r);}function
connect(){global$b;$g=new
Min_DB;$mb=$b->credentials();if($g->connect($mb[0],$mb[1],$mb[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($F,$Z,$w,$B=0,$_f=" "){return($B?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $F$Z) t WHERE rownum <= ".($w+$B).") WHERE rnum > $B":($w!==null?" * FROM (SELECT $F$Z) WHERE rownum <= ".($w+$B):" $F$Z"));}function
limit1($F,$Z){return" $F$Z";}function
db_collation($j,$Wa){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($i){return
array();}function
table_status($A=""){$H=array();$xf=q($A);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($A!=""?" AND table_name = $xf":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($A!=""?" WHERE view_name = $xf":"")."
ORDER BY 1")as$I){if($A!="")return$I;$H[$I["Name"]]=$I;}return$H;}function
is_view($P){return$P["Engine"]=="view";}function
fk_support($P){return
true;}function
fields($O){$H=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($O)." ORDER BY column_id")as$I){$S=$I["DATA_TYPE"];$td="$I[DATA_PRECISION],$I[DATA_SCALE]";if($td==",")$td=$I["DATA_LENGTH"];$H[$I["COLUMN_NAME"]]=array("field"=>$I["COLUMN_NAME"],"full_type"=>$S.($td?"($td)":""),"type"=>strtolower($S),"length"=>$td,"default"=>$I["DATA_DEFAULT"],"null"=>($I["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$H;}function
indexes($O,$h=null){$H=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($O)."
ORDER BY uc.constraint_type, uic.column_position",$h)as$I){$Rc=$I["INDEX_NAME"];$H[$Rc]["type"]=($I["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($I["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$H[$Rc]["columns"][]=$I["COLUMN_NAME"];$H[$Rc]["lengths"][]=($I["CHAR_LENGTH"]&&$I["CHAR_LENGTH"]!=$I["COLUMN_LENGTH"]?$I["CHAR_LENGTH"]:null);$H[$Rc]["descs"][]=($I["DESCEND"]?'1':null);}return$H;}function
view($A){$J=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($A));return
reset($J);}function
collations(){return
array();}function
information_schema($j){return
false;}function
error(){global$g;return
h($g->error);}function
explain($g,$F){$g->query("EXPLAIN PLAN FOR $F");return$g->query("SELECT * FROM plan_table");}function
found_rows($P,$Z){}function
alter_table($O,$A,$m,$tc,$ab,$Tb,$d,$_a,$Be){$c=$Fb=array();foreach($m
as$l){$W=$l[1];if($W&&$l[0]!=""&&idf_escape($l[0])!=$W[0])queries("ALTER TABLE ".table($O)." RENAME COLUMN ".idf_escape($l[0])." TO $W[0]");if($W)$c[]=($O!=""?($l[0]!=""?"MODIFY (":"ADD ("):"  ").implode($W).($O!=""?")":"");else$Fb[]=idf_escape($l[0]);}if($O=="")return
queries("CREATE TABLE ".table($A)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($O)."\n".implode("\n",$c)))&&(!$Fb||queries("ALTER TABLE ".table($O)." DROP (".implode(", ",$Fb).")"))&&($O==$A||queries("ALTER TABLE ".table($O)." RENAME TO ".table($A)));}function
foreign_keys($O){return
array();}function
truncate_tables($Q){return
apply_queries("TRUNCATE TABLE",$Q);}function
drop_views($Y){return
apply_queries("DROP VIEW",$Y);}function
drop_tables($Q){return
apply_queries("DROP TABLE",$Q);}function
begin(){return
true;}function
insert_into($O,$M){return
queries("INSERT INTO ".table($O)." (".implode(", ",array_keys($M)).")\nVALUES (".implode(", ",$M).")");}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$g;return$g->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($wf){global$g;return$g->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($wf));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$J=get_rows('SELECT * FROM v$instance');return
reset($J);}function
convert_field($l){}function
unconvert_field($l,$H){return$H;}function
support($mc){return
ereg("view|scheme|processlist|drop_col|variables|status",$mc);}$u="oracle";$T=array();$Nf=array();foreach(array('Numbers'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Date and time'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Strings'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'Binary'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$v=>$W){$T+=$W;$Nf[$v]=array_keys($W);}$Hg=array();$ie=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Cc=array("length","lower","round","upper");$Hc=array("avg","count","count distinct","max","min","sum");$Lb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Eb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$Ke=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$k){$this->errno=$k["code"];$this->error.="$k[message]\n";}$this->error=rtrim($this->error);}function
connect($L,$U,$D){$this->_link=@sqlsrv_connect($L,array("UID"=>$U,"PWD"=>$D,"CharacterSet"=>"UTF-8"));if($this->_link){$Vc=sqlsrv_server_info($this->_link);$this->server_info=$Vc['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($N){return"'".str_replace("'","''",$N)."'";}function
select_db($qb){return$this->query("USE ".idf_escape($qb));}function
query($F,$Bg=false){$G=sqlsrv_query($this->_link,$F);$this->error="";if(!$G){$this->_get_error();return
false;}return$this->store_result($G);}function
multi_query($F){$this->_result=sqlsrv_query($this->_link,$F);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($G=null){if(!$G)$G=$this->_result;if(sqlsrv_field_metadata($G))return
new
Min_Result($G);$this->affected_rows=sqlsrv_rows_affected($G);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($F,$l=0){$G=$this->query($F);if(!is_object($G))return
false;$I=$G->fetch_row();return$I[$l];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($G){$this->_result=$G;}function
_convert($I){foreach((array)$I
as$v=>$W){if(is_a($W,'DateTime'))$I[$v]=$W->format("Y-m-d H:i:s");}return$I;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$l=$this->_fields[$this->_offset++];$H=new
stdClass;$H->name=$l["Name"];$H->orgname=$l["Name"];$H->type=($l["Type"]==1?254:0);return$H;}function
seek($B){for($p=0;$p<$B;$p++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($L,$U,$D){$this->_link=@mssql_connect($L,$U,$D);if($this->_link){$G=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$I=$G->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$I[0]] $I[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($N){return"'".str_replace("'","''",$N)."'";}function
select_db($qb){return
mssql_select_db($qb);}function
query($F,$Bg=false){$G=mssql_query($F,$this->_link);$this->error="";if(!$G){$this->error=mssql_get_last_message();return
false;}if($G===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($G);}function
multi_query($F){return$this->_result=$this->query($F);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($F,$l=0){$G=$this->query($F);if(!is_object($G))return
false;return
mssql_result($G->_result,0,$l);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($G){$this->_result=$G;$this->num_rows=mssql_num_rows($G);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$H=mssql_fetch_field($this->_result);$H->orgtable=$H->table;$H->orgname=$H->name;return$H;}function
seek($B){mssql_data_seek($this->_result,$B);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($r){return"[".str_replace("]","]]",$r)."]";}function
table($r){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($r);}function
connect(){global$b;$g=new
Min_DB;$mb=$b->credentials();if($g->connect($mb[0],$mb[1],$mb[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($F,$Z,$w,$B=0,$_f=" "){return($w!==null?" TOP (".($w+$B).")":"")." $F$Z";}function
limit1($F,$Z){return
limit($F,$Z,1);}function
db_collation($j,$Wa){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($j));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($i){global$g;$H=array();foreach($i
as$j){$g->select_db($j);$H[$j]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$H;}function
table_status($A=""){$H=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($A!=""?"AND name = ".q($A):"ORDER BY name"))as$I){if($A!="")return$I;$H[$I["Name"]]=$I;}return$H;}function
is_view($P){return$P["Engine"]=="VIEW";}function
fk_support($P){return
true;}function
fields($O){$H=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($O))as$I){$S=$I["type"];$td=(ereg("char|binary",$S)?$I["max_length"]:($S=="decimal"?"$I[precision],$I[scale]":""));$H[$I["name"]]=array("field"=>$I["name"],"full_type"=>$S.($td?"($td)":""),"type"=>$S,"length"=>$td,"default"=>$I["default"],"null"=>$I["is_nullable"],"auto_increment"=>$I["is_identity"],"collation"=>$I["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$I["is_identity"],);}return$H;}function
indexes($O,$h=null){$H=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($O),$h)as$I){$A=$I["name"];$H[$A]["type"]=($I["is_primary_key"]?"PRIMARY":($I["is_unique"]?"UNIQUE":"INDEX"));$H[$A]["lengths"]=array();$H[$A]["columns"][$I["key_ordinal"]]=$I["column_name"];$H[$A]["descs"][$I["key_ordinal"]]=($I["is_descending_key"]?'1':null);}return$H;}function
view($A){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($A))));}function
collations(){$H=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$d)$H[ereg_replace("_.*","",$d)][]=$d;return$H;}function
information_schema($j){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
create_database($j,$d){return
queries("CREATE DATABASE ".idf_escape($j).(eregi('^[a-z0-9_]+$',$d)?" COLLATE $d":""));}function
drop_databases($i){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$i)));}function
rename_database($A,$d){if(eregi('^[a-z0-9_]+$',$d))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $d");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($A));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($O,$A,$m,$tc,$ab,$Tb,$d,$_a,$Be){$c=array();foreach($m
as$l){$e=idf_escape($l[0]);$W=$l[1];if(!$W)$c["DROP"][]=" COLUMN $e";else{$W[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$W[1]);if($l[0]=="")$c["ADD"][]="\n  ".implode("",$W).($O==""?substr($tc[$W[0]],16+strlen($W[0])):"");else{unset($W[6]);if($e!=$W[0])queries("EXEC sp_rename ".q(table($O).".$e").", ".q(idf_unescape($W[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$W)][]="";}}}if($O=="")return
queries("CREATE TABLE ".table($A)." (".implode(",",(array)$c["ADD"])."\n)");if($O!=$A)queries("EXEC sp_rename ".q(table($O)).", ".q($A));if($tc)$c[""]=$tc;foreach($c
as$v=>$W){if(!queries("ALTER TABLE ".idf_escape($A)." $v".implode(",",$W)))return
false;}return
true;}function
alter_indexes($O,$c){$s=array();$Fb=array();foreach($c
as$W){if($W[2]=="DROP"){if($W[0]=="PRIMARY")$Fb[]=idf_escape($W[1]);else$s[]=idf_escape($W[1])." ON ".table($O);}elseif(!queries(($W[0]!="PRIMARY"?"CREATE $W[0] ".($W[0]!="INDEX"?"INDEX ":"").idf_escape($W[1]!=""?$W[1]:uniqid($O."_"))." ON ".table($O):"ALTER TABLE ".table($O)." ADD PRIMARY KEY")." $W[2]"))return
false;}return(!$s||queries("DROP INDEX ".implode(", ",$s)))&&(!$Fb||queries("ALTER TABLE ".table($O)." DROP ".implode(", ",$Fb)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($O,$M){return
queries("INSERT INTO ".table($O).($M?" (".implode(", ",array_keys($M)).")\nVALUES (".implode(", ",$M).")":"DEFAULT VALUES"));}function
insert_update($O,$M,$Ne){$Ig=array();$Z=array();foreach($M
as$v=>$W){$Ig[]="$v = $W";if(isset($Ne[idf_unescape($v)]))$Z[]="$v = $W";}return
queries("MERGE ".table($O)." USING (VALUES(".implode(", ",$M).")) AS source (c".implode(", c",range(1,count($M))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Ig)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($M)).") VALUES (".implode(", ",$M).");");}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$F){$g->query("SET SHOWPLAN_ALL ON");$H=$g->query($F);$g->query("SET SHOWPLAN_ALL OFF");return$H;}function
found_rows($P,$Z){}function
foreign_keys($O){$H=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($O))as$I){$n=&$H[$I["FK_NAME"]];$n["table"]=$I["PKTABLE_NAME"];$n["source"][]=$I["FKCOLUMN_NAME"];$n["target"][]=$I["PKCOLUMN_NAME"];}return$H;}function
truncate_tables($Q){return
apply_queries("TRUNCATE TABLE",$Q);}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($Q){return
queries("DROP TABLE ".implode(", ",array_map('table',$Q)));}function
move_tables($Q,$Y,$cg){return
apply_queries("ALTER SCHEMA ".idf_escape($cg)." TRANSFER",array_merge($Q,$Y));}function
trigger($A){if($A=="")return
array();$J=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($A));$H=reset($J);if($H)$H["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$H["text"]);return$H;}function
triggers($O){$H=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($O))as$I)$H[$I["name"]]=array($I["Timing"],$I["Event"]);return$H;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!="")return$_GET["ns"];return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($vf){return
true;}function
use_sql($qb){return"USE ".idf_escape($qb);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($l){}function
unconvert_field($l,$H){return$H;}function
support($mc){return
ereg('^(scheme|trigger|view|drop_col)$',$mc);}$u="mssql";$T=array();$Nf=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Date and time'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Strings'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'Binary'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$v=>$W){$T+=$W;$Nf[$v]=array_keys($W);}$Hg=array();$ie=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Cc=array("len","lower","round","upper");$Hc=array("avg","count","count distinct","max","min","sum");$Lb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Eb=array("server"=>"MySQL")+$Eb;if(!defined("DRIVER")){$Ke=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($L,$U,$D){mysqli_report(MYSQLI_REPORT_OFF);list($Mc,$Ge)=explode(":",$L,2);$H=@$this->real_connect(($L!=""?$Mc:ini_get("mysqli.default_host")),($L.$U!=""?$U:ini_get("mysqli.default_user")),($L.$U.$D!=""?$D:ini_get("mysqli.default_pw")),null,(is_numeric($Ge)?$Ge:ini_get("mysqli.default_port")),(!is_numeric($Ge)?$Ge:null));if($H){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$H;}function
result($F,$l=0){$G=$this->query($F);if(!$G)return
false;$I=$G->fetch_array();return$I[$l];}function
quote($N){return"'".$this->escape_string($N)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($L,$U,$D){$this->_link=@mysql_connect(($L!=""?$L:ini_get("mysql.default_host")),("$L$U"!=""?$U:ini_get("mysql.default_user")),("$L$U$D"!=""?$D:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($N){return"'".mysql_real_escape_string($N,$this->_link)."'";}function
select_db($qb){return
mysql_select_db($qb,$this->_link);}function
query($F,$Bg=false){$G=@($Bg?mysql_unbuffered_query($F,$this->_link):mysql_query($F,$this->_link));$this->error="";if(!$G){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($G===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($G);}function
multi_query($F){return$this->_result=$this->query($F);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($F,$l=0){$G=$this->query($F);if(!$G||!$G->num_rows)return
false;return
mysql_result($G->_result,0,$l);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($G){$this->_result=$G;$this->num_rows=mysql_num_rows($G);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$H=mysql_fetch_field($this->_result,$this->_offset++);$H->orgtable=$H->table;$H->orgname=$H->name;$H->charsetnr=($H->blob?63:0);return$H;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($L,$U,$D){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$L)),$U,$D);$this->query("SET NAMES utf8");return
true;}function
select_db($qb){return$this->query("USE ".idf_escape($qb));}function
query($F,$Bg=false){$this->setAttribute(1000,!$Bg);return
parent::query($F,$Bg);}}}function
idf_escape($r){return"`".str_replace("`","``",$r)."`";}function
table($r){return
idf_escape($r);}function
connect(){global$b;$g=new
Min_DB;$mb=$b->credentials();if($g->connect($mb[0],$mb[1],$mb[2])){$g->query("SET sql_quote_show_create = 1, autocommit = 1");return$g;}$H=$g->error;if(function_exists('iconv')&&!is_utf8($H)&&strlen($tf=iconv("windows-1250","utf-8",$H))>strlen($H))$H=$tf;return$H;}function
get_databases($sc){global$g;$H=get_session("dbs");if($H===null){$F=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$H=($sc?slow_query($F):get_vals($F));restart_session();set_session("dbs",$H);stop_session();}return$H;}function
limit($F,$Z,$w,$B=0,$_f=" "){return" $F$Z".($w!==null?$_f."LIMIT $w".($B?" OFFSET $B":""):"");}function
limit1($F,$Z){return
limit($F,$Z,1);}function
db_collation($j,$Wa){global$g;$H=null;$jb=$g->result("SHOW CREATE DATABASE ".idf_escape($j),1);if(preg_match('~ COLLATE ([^ ]+)~',$jb,$z))$H=$z[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$jb,$z))$H=$Wa[$z[1]][-1];return$H;}function
engines(){$H=array();foreach(get_rows("SHOW ENGINES")as$I){if(ereg("YES|DEFAULT",$I["Support"]))$H[]=$I["Engine"];}return$H;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($i){$H=array();foreach($i
as$j)$H[$j]=count(get_vals("SHOW TABLES IN ".idf_escape($j)));return$H;}function
table_status($A="",$lc=false){global$g;$H=array();foreach(get_rows($lc&&$g->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($A!=""?"AND TABLE_NAME = ".q($A):"ORDER BY Name"):"SHOW TABLE STATUS".($A!=""?" LIKE ".q(addcslashes($A,"%_\\")):""))as$I){if($I["Engine"]=="InnoDB")$I["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$I["Comment"]);if(!isset($I["Engine"]))$I["Comment"]="";if($A!="")return$I;$H[$I["Name"]]=$I;}return$H;}function
is_view($P){return$P["Engine"]===null;}function
fk_support($P){return
eregi("InnoDB|IBMDB2I",$P["Engine"]);}function
fields($O){$H=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($O))as$I){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$I["Type"],$z);$H[$I["Field"]]=array("field"=>$I["Field"],"full_type"=>$I["Type"],"type"=>$z[1],"length"=>$z[2],"unsigned"=>ltrim($z[3].$z[4]),"default"=>($I["Default"]!=""||ereg("char|set",$z[1])?$I["Default"]:null),"null"=>($I["Null"]=="YES"),"auto_increment"=>($I["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$I["Extra"],$z)?$z[1]:""),"collation"=>$I["Collation"],"privileges"=>array_flip(explode(",",$I["Privileges"])),"comment"=>$I["Comment"],"primary"=>($I["Key"]=="PRI"),);}return$H;}function
indexes($O,$h=null){$H=array();foreach(get_rows("SHOW INDEX FROM ".table($O),$h)as$I){$H[$I["Key_name"]]["type"]=($I["Key_name"]=="PRIMARY"?"PRIMARY":($I["Index_type"]=="FULLTEXT"?"FULLTEXT":($I["Non_unique"]?"INDEX":"UNIQUE")));$H[$I["Key_name"]]["columns"][]=$I["Column_name"];$H[$I["Key_name"]]["lengths"][]=$I["Sub_part"];$H[$I["Key_name"]]["descs"][]=null;}return$H;}function
foreign_keys($O){global$g,$ee;static$Ee='`(?:[^`]|``)+`';$H=array();$kb=$g->result("SHOW CREATE TABLE ".table($O),1);if($kb){preg_match_all("~CONSTRAINT ($Ee) FOREIGN KEY \\(((?:$Ee,? ?)+)\\) REFERENCES ($Ee)(?:\\.($Ee))? \\(((?:$Ee,? ?)+)\\)(?: ON DELETE ($ee))?(?: ON UPDATE ($ee))?~",$kb,$_d,PREG_SET_ORDER);foreach($_d
as$z){preg_match_all("~$Ee~",$z[2],$Ff);preg_match_all("~$Ee~",$z[5],$cg);$H[idf_unescape($z[1])]=array("db"=>idf_unescape($z[4]!=""?$z[3]:$z[4]),"table"=>idf_unescape($z[4]!=""?$z[4]:$z[3]),"source"=>array_map('idf_unescape',$Ff[0]),"target"=>array_map('idf_unescape',$cg[0]),"on_delete"=>($z[6]?$z[6]:"RESTRICT"),"on_update"=>($z[7]?$z[7]:"RESTRICT"),);}}return$H;}function
view($A){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($A),1)));}function
collations(){$H=array();foreach(get_rows("SHOW COLLATION")as$I){if($I["Default"])$H[$I["Charset"]][-1]=$I["Collation"];else$H[$I["Charset"]][]=$I["Collation"];}ksort($H);foreach($H
as$v=>$W)asort($H[$v]);return$H;}function
information_schema($j){global$g;return($g->server_info>=5&&$j=="information_schema")||($g->server_info>=5.5&&$j=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
error_line(){global$g;if(ereg(' at line ([0-9]+)$',$g->error,$gf))return$gf[1]-1;}function
create_database($j,$d){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($j).($d?" COLLATE ".q($d):""));}function
drop_databases($i){restart_session();set_session("dbs",null);return
apply_queries("DROP DATABASE",$i,'idf_escape');}function
rename_database($A,$d){if(create_database($A,$d)){$if=array();foreach(tables_list()as$O=>$S)$if[]=table($O)." TO ".idf_escape($A).".".table($O);if(!$if||queries("RENAME TABLE ".implode(", ",$if))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Aa=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$s){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$s["columns"],true)){$Aa="";break;}if($s["type"]=="PRIMARY")$Aa=" UNIQUE";}}return" AUTO_INCREMENT$Aa";}function
alter_table($O,$A,$m,$tc,$ab,$Tb,$d,$_a,$Be){$c=array();foreach($m
as$l)$c[]=($l[1]?($O!=""?($l[0]!=""?"CHANGE ".idf_escape($l[0]):"ADD"):" ")." ".implode($l[1]).($O!=""?$l[2]:""):"DROP ".idf_escape($l[0]));$c=array_merge($c,$tc);$Kf="COMMENT=".q($ab).($Tb?" ENGINE=".q($Tb):"").($d?" COLLATE ".q($d):"").($_a!=""?" AUTO_INCREMENT=$_a":"").$Be;if($O=="")return
queries("CREATE TABLE ".table($A)." (\n".implode(",\n",$c)."\n) $Kf");if($O!=$A)$c[]="RENAME TO ".table($A);$c[]=$Kf;return
queries("ALTER TABLE ".table($O)."\n".implode(",\n",$c));}function
alter_indexes($O,$c){foreach($c
as$v=>$W)$c[$v]=($W[2]=="DROP"?"\nDROP INDEX ".idf_escape($W[1]):"\nADD $W[0] ".($W[0]=="PRIMARY"?"KEY ":"").($W[1]!=""?idf_escape($W[1])." ":"").$W[2]);return
queries("ALTER TABLE ".table($O).implode(",",$c));}function
truncate_tables($Q){return
apply_queries("TRUNCATE TABLE",$Q);}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($Q){return
queries("DROP TABLE ".implode(", ",array_map('table',$Q)));}function
move_tables($Q,$Y,$cg){$if=array();foreach(array_merge($Q,$Y)as$O)$if[]=table($O)." TO ".idf_escape($cg).".".table($O);return
queries("RENAME TABLE ".implode(", ",$if));}function
copy_tables($Q,$Y,$cg){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($Q
as$O){$A=($cg==DB?table("copy_$O"):idf_escape($cg).".".table($O));if(!queries("DROP TABLE IF EXISTS $A")||!queries("CREATE TABLE $A LIKE ".table($O))||!queries("INSERT INTO $A SELECT * FROM ".table($O)))return
false;}foreach($Y
as$O){$A=($cg==DB?table("copy_$O"):idf_escape($cg).".".table($O));$Sg=view($O);if(!queries("DROP VIEW IF EXISTS $A")||!queries("CREATE VIEW $A AS $Sg[select]"))return
false;}return
true;}function
trigger($A){if($A=="")return
array();$J=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($A));return
reset($J);}function
triggers($O){$H=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($O,"%_\\")))as$I)$H[$I["Trigger"]]=array($I["Timing"],$I["Event"]);return$H;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($A,$S){global$g,$Vb,$Xc,$T;$ua=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Ag="((".implode("|",array_merge(array_keys($T),$ua)).")\\b(?:\\s*\\(((?:[^'\")]*|$Vb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$Ee="\\s*(".($S=="FUNCTION"?"":$Xc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Ag";$jb=$g->result("SHOW CREATE $S ".idf_escape($A),2);preg_match("~\\(((?:$Ee\\s*,?)*)\\)\\s*".($S=="FUNCTION"?"RETURNS\\s+$Ag\\s+":"")."(.*)~is",$jb,$z);$m=array();preg_match_all("~$Ee\\s*,?~is",$z[1],$_d,PREG_SET_ORDER);foreach($_d
as$xe){$A=str_replace("``","`",$xe[2]).$xe[3];$m[]=array("field"=>$A,"type"=>strtolower($xe[5]),"length"=>preg_replace_callback("~$Vb~s",'normalize_enum',$xe[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$xe[8] $xe[7]"))),"null"=>1,"full_type"=>$xe[4],"inout"=>strtoupper($xe[1]),"collation"=>strtolower($xe[9]),);}if($S!="FUNCTION")return
array("fields"=>$m,"definition"=>$z[11]);return
array("fields"=>$m,"returns"=>array("type"=>$z[12],"length"=>$z[13],"unsigned"=>$z[15],"collation"=>$z[16]),"definition"=>$z[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($O,$M){return
queries("INSERT INTO ".table($O)." (".implode(", ",array_keys($M)).")\nVALUES (".implode(", ",$M).")");}function
insert_update($O,$M,$Ne){foreach($M
as$v=>$W)$M[$v]="$v = $W";$Ig=implode(", ",$M);return
queries("INSERT INTO ".table($O)." SET $Ig ON DUPLICATE KEY UPDATE $Ig");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$F){return$g->query("EXPLAIN ".($g->server_info>=5.1?"PARTITIONS ":"").$F);}function
found_rows($P,$Z){return($Z||$P["Engine"]!="InnoDB"?null:$P["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($vf){return
true;}function
create_sql($O,$_a){global$g;$H=$g->result("SHOW CREATE TABLE ".table($O),1);if(!$_a)$H=preg_replace('~ AUTO_INCREMENT=\\d+~','',$H);return$H;}function
truncate_sql($O){return"TRUNCATE ".table($O);}function
use_sql($qb){return"USE ".idf_escape($qb);}function
trigger_sql($O,$Of){$H="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($O,"%_\\")),null,"-- ")as$I)$H.="\n".($Of=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($I["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($I["Trigger"])." $I[Timing] $I[Event] ON ".table($I["Table"])." FOR EACH ROW\n$I[Statement];;\n";return$H;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($l){if(ereg("binary",$l["type"]))return"HEX(".idf_escape($l["field"]).")";if($l["type"]=="bit")return"BIN(".idf_escape($l["field"])." + 0)";if(ereg("geometry|point|linestring|polygon",$l["type"]))return"AsWKT(".idf_escape($l["field"]).")";}function
unconvert_field($l,$H){if(ereg("binary",$l["type"]))$H="UNHEX($H)";if($l["type"]=="bit")$H="CONV($H, 2, 10) + 0";if(ereg("geometry|point|linestring|polygon",$l["type"]))$H="GeomFromText($H)";return$H;}function
support($mc){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$mc);}$u="sql";$T=array();$Nf=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometry'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$v=>$W){$T+=$W;$Nf[$v]=array_keys($W);}$Hg=array("unsigned","zerofill","unsigned zerofill");$ie=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Cc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Hc=array("avg","count","count distinct","group_concat","max","min","sum");$Lb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="3.7.1";class
Adminer{var$operators;function
name(){return"<a href='http://www.adminer.org/' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin($jb=false){return
password_file($jb);}function
database(){return
DB;}function
databases($sc=true){return
get_databases($sc);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$Eb;echo'<table cellspacing="0">
<tr><th>System<td>',html_select("auth[driver]",$Eb,DRIVER,"loginDriver(this);"),'<tr><th>Server<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>Username<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>Password<td><input type="password" name="auth[password]">
<tr><th>Database<td><input name="auth[db]" value="',h($_GET["db"]);?>" autocapitalize="off">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
focus(username);
username.form['auth[driver]'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".'Login'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Permanent login')."\n";}function
login($xd,$D){return
true;}function
tableName($Uf){return
h($Uf["Name"]);}function
fieldName($l,$me=0){return'<span title="'.h($l["full_type"]).'">'.h($l["field"]).'</span>';}function
selectLinks($Uf,$M=""){echo'<p class="tabs">';$wd=array("select"=>'Select data',"table"=>'Show structure');if(is_view($Uf))$wd["view"]='Alter view';else$wd["create"]='Alter table';if($M!==null)$wd["edit"]='New item';foreach($wd
as$v=>$W)echo" <a href='".h(ME)."$v=".urlencode($Uf["Name"]).($v=="edit"?$M:"")."'".bold(isset($_GET[$v])).">$W</a>";echo"\n";}function
foreignKeys($O){return
foreign_keys($O);}function
backwardKeys($O,$Tf){return
array();}function
backwardKeysPrint($Ca,$I){}function
selectQuery($F){global$u,$R;return"<form action='".h(ME)."sql=' method='post'><p><span onclick=\"return !selectEditSql(event, this, '".'Execute'."');\">"."<code class='jush-$u'>".h(str_replace("\n"," ",$F))."</code>"." <a href='".h(ME)."sql=".urlencode($F)."'>".'Edit'."</a>"."</span><input type='hidden' name='token' value='$R'></p></form>\n";}function
rowDescription($O){return"";}function
rowDescriptions($J,$uc){return$J;}function
selectLink($W,$l){}function
selectVal($W,$x,$l){$H=($W===null?"<i>NULL</i>":(ereg("char|binary",$l["type"])&&!ereg("var",$l["type"])?"<code>$W</code>":$W));if(ereg('blob|bytea|raw|file',$l["type"])&&!is_utf8($W))$H=lang(array('%d byte','%d bytes'),strlen(html_entity_decode($W,ENT_QUOTES)));return($x?"<a href='".h($x)."'>$H</a>":$H);}function
editVal($W,$l){return$W;}function
selectColumnsPrint($K,$f){global$Cc,$Hc;print_fieldset("select",'Select',$K);$p=0;$Ac=array('Functions'=>$Cc,'Aggregation'=>$Hc);foreach($K
as$v=>$W){$W=$_GET["columns"][$v];echo"<div>".html_select("columns[$p][fun]",array(-1=>"")+$Ac,$W["fun"]),"(<select name='columns[$p][col]' onchange='selectFieldChange(this.form);'><option>".optionlist($f,$W["col"],true)."</select>)</div>\n";$p++;}echo"<div>".html_select("columns[$p][fun]",array(-1=>"")+$Ac,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$p][col]' onchange='selectAddRow(this);'><option>".optionlist($f,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($Z,$f,$t){print_fieldset("search",'Search',$Z);foreach($t
as$p=>$s){if($s["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$s["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$p]' value='".h($_GET["fulltext"][$p])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$p]",1,isset($_GET["boolean"][$p]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Ma="this.nextSibling.onchange();";for($p=0;$p<=count($_GET["where"]);$p++){list(,$W)=each($_GET["where"]);if(!$W||("$W[col]$W[val]"!=""&&in_array($W["op"],$this->operators))){echo"<div><select name='where[$p][col]' onchange='$Ma'><option value=''>(".'anywhere'.")".optionlist($f,$W["col"],true)."</select>",html_select("where[$p][op]",$this->operators,$W["op"],$Ma),"<input type='search' name='where[$p][val]' value='".h($W["val"])."' onchange='".($W?"selectFieldChange(this.form)":"selectAddRow(this)").";' onsearch='selectSearchSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($me,$f,$t){print_fieldset("sort",'Sort',$me);$p=0;foreach((array)$_GET["order"]as$v=>$W){if(isset($f[$W])){echo"<div><select name='order[$p]' onchange='selectFieldChange(this.form);'><option>".optionlist($f,$W,true)."</select>",checkbox("desc[$p]",1,isset($_GET["desc"][$v]),'descending')."</div>\n";$p++;}}echo"<div><select name='order[$p]' onchange='selectAddRow(this);'><option>".optionlist($f,null,true)."</select>",checkbox("desc[$p]",1,false,'descending')."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($w){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($w)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($hg){if($hg!==null){echo"<fieldset><legend>".'Text length'."</legend><div>","<input type='number' name='text_length' class='size' value='".h($hg)."'>","</div></fieldset>\n";}}function
selectActionPrint($t){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>"," <span id='noindex' title='".'Full table scan'."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$f=array();foreach($t
as$s){if($s["type"]!="FULLTEXT")$f[reset($s["columns"])]=1;}$f[""]=1;foreach($f
as$v=>$W)json_row($v);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($Pb,$f){}function
selectColumnsProcess($f,$t){global$Cc,$Hc;$K=array();$Fc=array();foreach((array)$_GET["columns"]as$v=>$W){if($W["fun"]=="count"||(isset($f[$W["col"]])&&(!$W["fun"]||in_array($W["fun"],$Cc)||in_array($W["fun"],$Hc)))){$K[$v]=apply_sql_function($W["fun"],(isset($f[$W["col"]])?idf_escape($W["col"]):"*"));if(!in_array($W["fun"],$Hc))$Fc[]=$K[$v];}}return
array($K,$Fc);}function
selectSearchProcess($m,$t){global$u;$H=array();foreach($t
as$p=>$s){if($s["type"]=="FULLTEXT"&&$_GET["fulltext"][$p]!="")$H[]="MATCH (".implode(", ",array_map('idf_escape',$s["columns"])).") AGAINST (".q($_GET["fulltext"][$p]).(isset($_GET["boolean"][$p])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$W){if("$W[col]$W[val]"!=""&&in_array($W["op"],$this->operators)){$cb=" $W[op]";if(ereg('IN$',$W["op"])){$Qc=process_length($W["val"]);$cb.=" (".($Qc!=""?$Qc:"NULL").")";}elseif($W["op"]=="SQL")$cb=" $W[val]";elseif($W["op"]=="LIKE %%")$cb=" LIKE ".$this->processInput($m[$W["col"]],"%$W[val]%");elseif(!ereg('NULL$',$W["op"]))$cb.=" ".$this->processInput($m[$W["col"]],$W["val"]);if($W["col"]!="")$H[]=idf_escape($W["col"]).$cb;else{$Xa=array();foreach($m
as$A=>$l){$dd=ereg('char|text|enum|set',$l["type"]);if((is_numeric($W["val"])||!ereg('(^|[^o])int|float|double|decimal|bit',$l["type"]))&&(!ereg("[\x80-\xFF]",$W["val"])||$dd)){$A=idf_escape($A);$Xa[]=($u=="sql"&&$dd&&!ereg('^utf8',$l["collation"])?"CONVERT($A USING utf8)":$A);}}$H[]=($Xa?"(".implode("$cb OR ",$Xa)."$cb)":"0");}}}return$H;}function
selectOrderProcess($m,$t){$H=array();foreach((array)$_GET["order"]as$v=>$W){if(isset($m[$W])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$W))$H[]=(isset($m[$W])?idf_escape($W):$W).(isset($_GET["desc"][$v])?" DESC":"");}return$H;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$uc){return
false;}function
selectQueryBuild($K,$Z,$Fc,$me,$w,$C){return"";}function
messageQuery($F){global$u;restart_session();$Kc=&get_session("queries");$q="sql-".count($Kc[$_GET["db"]]);if(strlen($F)>1e6)$F=ereg_replace('[\x80-\xFF]+$','',substr($F,0,1e6))."\n...";$Kc[$_GET["db"]][]=array($F,time());return" <span class='time'>".@date("H:i:s")."</span> <a href='#$q' onclick=\"return !toggle('$q');\">".'SQL command'."</a><div id='$q' class='hidden'><pre><code class='jush-$u'>".shorten_utf8($F,1000).'</code></pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($Kc[$_GET["db"]])-1)).'">'.'Edit'.'</a></div>';}function
editFunctions($l){global$Lb;$H=($l["null"]?"NULL/":"");foreach($Lb
as$v=>$Cc){if(!$v||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($Cc
as$Ee=>$W){if(!$Ee||ereg($Ee,$l["type"]))$H.="/$W";}if($v&&!ereg('set|blob|bytea|raw|file',$l["type"]))$H.="/SQL";}}return
explode("/",$H);}function
editInput($O,$l,$ya,$X){if($l["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$ya value='-1' checked><i>".'original'."</i></label> ":"").($l["null"]?"<label><input type='radio'$ya value=''".($X!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$ya,$l,$X,0);return"";}function
processInput($l,$X,$o=""){if($o=="SQL")return$X;$A=$l["field"];$H=q($X);if(ereg('^(now|getdate|uuid)$',$o))$H="$o()";elseif(ereg('^current_(date|timestamp)$',$o))$H=$o;elseif(ereg('^([+-]|\\|\\|)$',$o))$H=idf_escape($A)." $o $H";elseif(ereg('^[+-] interval$',$o))$H=idf_escape($A)." $o ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$X)?$X:$H);elseif(ereg('^(addtime|subtime|concat)$',$o))$H="$o(".idf_escape($A).", $H)";elseif(ereg('^(md5|sha1|password|encrypt)$',$o))$H="$o($H)";return
unconvert_field($l,$H);}function
dumpOutput(){$H=array('text'=>'open','file'=>'save');if(function_exists('gzencode'))$H['gz']='gzip';return$H;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($j){}function
dumpTable($O,$Of,$ed=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($Of)dump_csv(array_keys(fields($O)));}elseif($Of){if($ed==2){$m=array();foreach(fields($O)as$A=>$l)$m[]=idf_escape($A)." $l[full_type]";$jb="CREATE TABLE ".table($O)." (".implode(", ",$m).")";}else$jb=create_sql($O,$_POST["auto_increment"]);if($jb){if($Of=="DROP+CREATE"||$ed==1)echo"DROP ".($ed==2?"VIEW":"TABLE")." IF EXISTS ".table($O).";\n";if($ed==1)$jb=remove_definer($jb);echo"$jb;\n\n";}}}function
dumpData($O,$Of,$F){global$g,$u;$Bd=($u=="sqlite"?0:1048576);if($Of){if($_POST["format"]=="sql"){if($Of=="TRUNCATE+INSERT")echo
truncate_sql($O).";\n";$m=fields($O);}$G=$g->query($F,1);if($G){$Zc="";$Ka="";$id=array();$Qf="";$nc=($O!=''?'fetch_assoc':'fetch_row');while($I=$G->$nc()){if(!$id){$Pg=array();foreach($I
as$W){$l=$G->fetch_field();$id[]=$l->name;$v=idf_escape($l->name);$Pg[]="$v = VALUES($v)";}$Qf=($Of=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$Pg):"").";\n";}if($_POST["format"]!="sql"){if($Of=="table"){dump_csv($id);$Of="INSERT";}dump_csv($I);}else{if(!$Zc)$Zc="INSERT INTO ".table($O)." (".implode(", ",array_map('idf_escape',$id)).") VALUES";foreach($I
as$v=>$W){$l=$m[$v];$I[$v]=($W!==null?unconvert_field($l,ereg('(^|[^o])int|float|double|decimal',$l["type"])&&$W!=''?$W:q($W)):"NULL");}$tf=($Bd?"\n":" ")."(".implode(",\t",$I).")";if(!$Ka)$Ka=$Zc.$tf;elseif(strlen($Ka)+4+strlen($tf)+strlen($Qf)<$Bd)$Ka.=",$tf";else{echo$Ka.$Qf;$Ka=$Zc.$tf;}}}if($Ka)echo$Ka.$Qf;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpFilename($Oc){return
friendly_url($Oc!=""?$Oc:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($Oc,$Od=false){$ve=$_POST["output"];$hc=(ereg('sql',$_POST["format"])?"sql":($Od?"tar":"csv"));header("Content-Type: ".($ve=="gz"?"application/x-gzip":($hc=="tar"?"application/x-tar":($hc=="sql"||$ve!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($ve=="gz")ob_start('gzencode',1e6);return$hc;}function
homepage(){echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.'Alter database'."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'Alter schema':'Create schema')."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.'Database schema'."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".'Privileges'."</a>\n":"");return
true;}function
navigation($Nd){global$ia,$R,$u,$Eb;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Nd=="auth"){$rc=true;foreach((array)$_SESSION["pwds"]as$Db=>$Cf){foreach($Cf
as$L=>$Ng){foreach($Ng
as$U=>$D){if($D!==null){if($rc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$rc=false;}$tb=$_SESSION["db"][$Db][$L][$U];foreach(($tb?array_keys($tb):array(""))as$j)echo"<a href='".h(auth_url($Db,$L,$U,$j))."'>($Eb[$Db]) ".h($U.($L!=""?"@$L":"").($j!=""?" - $j":""))."</a><br>\n";}}}}}else{echo'<form action="" method="post">
<p class="logout">
';if(DB==""||!$Nd){echo"<a href='".h(ME)."sql='".bold(isset($_GET["sql"]))." title='".'Import'."'>".'SQL command'."</a>\n";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Dump'."</a>\n";}echo'<input type="submit" name="logout" value="Logout" id="logout">
<input type="hidden" name="token" value="',$R,'">
</p>
</form>
';$this->databasesPrint($Nd);if($_GET["ns"]!==""&&!$Nd&&DB!=""){echo'<p><a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Create new table'."</a>\n";$Q=table_status('',true);if(!$Q)echo"<p class='message'>".'No tables.'."\n";else{$this->tablesPrint($Q);$wd=array();foreach($Q
as$O=>$S)$wd[]=preg_quote($O,'/');echo"<script type='text/javascript'>\n","var jushLinks = { $u: [ '".js_escape(ME)."table=\$&', /\\b(".implode("|",$wd).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$W)echo"jushLinks.$W = jushLinks.$u;\n";echo"</script>\n";}}}}function
databasesPrint($Nd){global$g;$i=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$rb=" onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'";echo($i?"<select name='db'$rb>".optionlist(array(""=>"(".'database'.")")+$i,DB)."</select>":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".'Use'."'".($i?" class='hidden'":"").">\n";if($Nd!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br><select name='ns'$rb>".optionlist(array(""=>"(".'schema'.")")+schemas(),$_GET["ns"])."</select>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}function
tablesPrint($Q){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($Q
as$O=>$Kf){echo'<a href="'.h(ME).'select='.urlencode($O).'"'.bold($_GET["select"]==$O||$_GET["edit"]==$O).">".'select'."</a> ",'<a href="'.h(ME).'table='.urlencode($O).'"'.bold(in_array($O,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])))." title='".'Show structure'."'>".$this->tableName($Kf)."</a><br>\n";}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$ie;function
page_header($kg,$k="",$Ja=array(),$lg=""){global$ca,$b,$g,$Eb;header("Content-Type: text/html; charset=utf-8");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$mg=$kg.($lg!=""?": ".h($lg):"");$ng=strip_tags($mg.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$ng,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.7.1",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.7.1",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.7.1",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.7.1",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($Ja!==null){$x=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($x?$x:".").'">'.$Eb[DRIVER].'</a> &raquo; ';$x=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$L=(SERVER!=""?h(SERVER):'Server');if($Ja===false)echo"$L\n";else{echo"<a href='".($x?h($x):".")."' accesskey='1' title='Alt+Shift+1'>$L</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ja)))echo'<a href="'.h($x."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Ja)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Ja
as$v=>$W){$xb=(is_array($W)?$W[1]:$W);if($xb!="")echo'<a href="'.h(ME."$v=").urlencode(is_array($W)?$W[0]:$W).'">'.h($xb).'</a> &raquo; ';}}echo"$kg\n";}}echo"<h2>$mg</h2>\n";restart_session();$Jg=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Kd=$_SESSION["messages"][$Jg];if($Kd){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Kd)."</div>\n";unset($_SESSION["messages"][$Jg]);}$i=&get_session("dbs");if(DB!=""&&$i&&!in_array(DB,$i,true))$i=null;stop_session();if($k)echo"<div class='error'>$k</div>\n";define("PAGE_HEADER",1);}function
page_footer($Nd=""){global$b;echo'</div>

<div id="menu">
';$b->navigation($Nd);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($Qd){while($Qd>=2147483648)$Qd-=4294967296;while($Qd<=-2147483649)$Qd+=4294967296;return(int)$Qd;}function
long2str($V,$Ug){$tf='';foreach($V
as$W)$tf.=pack('V',$W);if($Ug)return
substr($tf,0,end($V));return$tf;}function
str2long($tf,$Ug){$V=array_values(unpack('V*',str_pad($tf,4*ceil(strlen($tf)/4),"\0")));if($Ug)$V[]=strlen($tf);return$V;}function
xxtea_mx($Zg,$Yg,$Rf,$gd){return
int32((($Zg>>5&0x7FFFFFF)^$Yg<<2)+(($Yg>>3&0x1FFFFFFF)^$Zg<<4))^int32(($Rf^$Yg)+($gd^$Zg));}function
encrypt_string($Mf,$v){if($Mf=="")return"";$v=array_values(unpack("V*",pack("H*",md5($v))));$V=str2long($Mf,true);$Qd=count($V)-1;$Zg=$V[$Qd];$Yg=$V[0];$E=floor(6+52/($Qd+1));$Rf=0;while($E-->0){$Rf=int32($Rf+0x9E3779B9);$Kb=$Rf>>2&3;for($we=0;$we<$Qd;$we++){$Yg=$V[$we+1];$Pd=xxtea_mx($Zg,$Yg,$Rf,$v[$we&3^$Kb]);$Zg=int32($V[$we]+$Pd);$V[$we]=$Zg;}$Yg=$V[0];$Pd=xxtea_mx($Zg,$Yg,$Rf,$v[$we&3^$Kb]);$Zg=int32($V[$Qd]+$Pd);$V[$Qd]=$Zg;}return
long2str($V,false);}function
decrypt_string($Mf,$v){if($Mf=="")return"";if(!$v)return
false;$v=array_values(unpack("V*",pack("H*",md5($v))));$V=str2long($Mf,false);$Qd=count($V)-1;$Zg=$V[$Qd];$Yg=$V[0];$E=floor(6+52/($Qd+1));$Rf=int32($E*0x9E3779B9);while($Rf){$Kb=$Rf>>2&3;for($we=$Qd;$we>0;$we--){$Zg=$V[$we-1];$Pd=xxtea_mx($Zg,$Yg,$Rf,$v[$we&3^$Kb]);$Yg=int32($V[$we]-$Pd);$V[$we]=$Yg;}$Zg=$V[$Qd];$Pd=xxtea_mx($Zg,$Yg,$Rf,$v[$we&3^$Kb]);$Yg=int32($V[0]-$Pd);$V[0]=$Yg;$Rf=int32($Rf-0x9E3779B9);}return
long2str($V,true);}$g='';$R=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$Fe=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$W){list($v)=explode(":",$W);$Fe[$v]=$W;}}$za=$_POST["auth"];if($za){session_regenerate_id();$_SESSION["pwds"][$za["driver"]][$za["server"]][$za["username"]]=$za["password"];$_SESSION["db"][$za["driver"]][$za["server"]][$za["username"]][$za["db"]]=true;if($za["permanent"]){$v=base64_encode($za["driver"])."-".base64_encode($za["server"])."-".base64_encode($za["username"])."-".base64_encode($za["db"]);$Qe=$b->permanentLogin(true);$Fe[$v]="$v:".base64_encode($Qe?encrypt_string($za["password"],$Qe):"");cookie("adminer_permanent",implode(" ",$Fe));}if(count($_POST)==1||DRIVER!=$za["driver"]||SERVER!=$za["server"]||$_GET["username"]!==$za["username"]||DB!=$za["db"])redirect(auth_url($za["driver"],$za["server"],$za["username"],$za["db"]));}elseif($_POST["logout"]){if($R&&$_POST["token"]!=$R){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$v)set_session($v,null);unset_permanent();redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.');}}elseif($Fe&&!$_SESSION["pwds"]){session_regenerate_id();$Qe=$b->permanentLogin();foreach($Fe
as$v=>$W){list(,$Qa)=explode(":",$W);list($Db,$L,$U,$j)=array_map('base64_decode',explode("-",$v));$_SESSION["pwds"][$Db][$L][$U]=decrypt_string(base64_decode($Qa),$Qe);$_SESSION["db"][$Db][$L][$U][$j]=true;}}function
unset_permanent(){global$Fe;foreach($Fe
as$v=>$W){list($Db,$L,$U,$j)=array_map('base64_decode',explode("-",$v));if($Db==DRIVER&&$L==SERVER&&$U==$_GET["username"]&&$j==DB)unset($Fe[$v]);}cookie("adminer_permanent",implode(" ",$Fe));}function
auth_error($bc=null){global$g,$b,$R;$Df=session_name();$k="";if(!$_COOKIE[$Df]&&$_GET[$Df]&&ini_bool("session.use_only_cookies"))$k='Session support must be enabled.';elseif(isset($_GET["username"])){if(($_COOKIE[$Df]||$_GET[$Df])&&!$R)$k='Session expired, please login again.';else{$D=&get_session("pwds");if($D!==null){$k=h($bc?$bc->getMessage():(is_string($g)?$g:'Invalid credentials.'));if($D===false)$k.='<br>'.sprintf('Master password expired. <a href="http://www.adminer.org/en/extension/" target="_blank">Implement</a> %s method to make it permanent.','<code>permanentLogin()</code>');$D=null;}unset_permanent();}}page_header('Login',$k,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$Ke)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$b->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$R=$_SESSION["token"];if($za&&$_POST["token"])$_POST["token"]=$R;$k='';if($_POST){if($_POST["token"]!=$R){$Wc="max_input_vars";$Fd=ini_get($Wc);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$v){$W=ini_get($v);if($W&&(!$Fd||$W<$Fd)){$Wc=$v;$Fd=$W;}}}$k=(!$_POST["token"]&&$Fd?sprintf('Maximum number of allowed fields exceeded. Please increase %s.',"'$Wc'"):'Invalid CSRF token. Send the form again.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$k=sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.',"'post_max_size'");if(isset($_GET["sql"]))$k.=' '.'You can upload a big SQL file via FTP and import it from server.';}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_cache_limiter("");session_write_close();}function
connect_error(){global$b,$g,$R,$k,$Eb;$i=array();if(DB!=""){header("HTTP/1.1 404 Not Found");page_header('Database'.": ".h(DB),'Invalid database.',true);}else{if($_POST["db"]&&!$k)queries_redirect(substr(ME,0,-1),'Databases have been dropped.',drop_databases($_POST["db"]));page_header('Select database',$k,false);echo"<p><a href='".h(ME)."database='>".'Create new database'."</a>\n";foreach(array('privileges'=>'Privileges','processlist'=>'Process list','variables'=>'Variables','status'=>'Status',)as$v=>$W){if(support($v))echo"<a href='".h(ME)."$v='>$W</a>\n";}echo"<p>".sprintf('%s version: %s through PHP extension %s',$Eb[DRIVER],"<b>$g->server_info</b>","<b>$g->extension</b>")."\n","<p>".sprintf('Logged as: %s',"<b>".h(logged_user())."</b>")."\n";$ef="<a href='".h(ME)."refresh=1'>".'Refresh'."</a>\n";$i=$b->databases();if($i){$wf=support("scheme");$Wa=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr><td>&nbsp;<th>".'Database'."<td>".'Collation'."<td>".'Tables'."</thead>\n";foreach($i
as$j){$of=h(ME)."db=".urlencode($j);echo"<tr".odd()."><td>".checkbox("db[]",$j,in_array($j,(array)$_POST["db"])),"<th><a href='$of'>".h($j)."</a>","<td><a href='$of".($wf?"&amp;ns=":"")."&amp;database=' title='".'Alter database'."'>".nbsp(db_collation($j,$Wa))."</a>","<td align='right'><a href='$of&amp;schema=' id='tables-".h($j)."' title='".'Database schema'."'>?</a>","\n";}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","<p><input type='submit' name='drop' value='".'Drop'."'".confirm("formChecked(this, /db/)").">\n","<input type='hidden' name='token' value='$R'>\n",$ef,"</form>\n";}else
echo"<p>$ef";}page_footer("db");if($i)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header('Schema'.": ".h($_GET["ns"]),'Invalid schema.',true);page_footer("ns");exit;}}function
select($G,$h=null,$Nc="",$pe=array()){$wd=array();$t=array();$f=array();$Ha=array();$T=array();$H=array();odd('');for($p=0;$I=$G->fetch_row();$p++){if(!$p){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($fd=0;$fd<count($I);$fd++){$l=$G->fetch_field();$A=$l->name;$oe=$l->orgtable;$ne=$l->orgname;$H[$l->table]=$oe;if($Nc)$wd[$fd]=($A=="table"?"table=":($A=="possible_keys"?"indexes=":null));elseif($oe!=""){if(!isset($t[$oe])){$t[$oe]=array();foreach(indexes($oe,$h)as$s){if($s["type"]=="PRIMARY"){$t[$oe]=array_flip($s["columns"]);break;}}$f[$oe]=$t[$oe];}if(isset($f[$oe][$ne])){unset($f[$oe][$ne]);$t[$oe][$ne]=$fd;$wd[$fd]=$oe;}}if($l->charsetnr==63)$Ha[$fd]=true;$T[$fd]=$l->type;$A=h($A);echo"<th".($oe!=""||$l->name!=$ne?" title='".h(($oe!=""?"$oe.":"").$ne)."'":"").">".($Nc?"<a href='$Nc".strtolower($A)."' target='_blank' rel='noreferrer' class='help'>$A</a>":$A);}echo"</thead>\n";}echo"<tr".odd().">";foreach($I
as$v=>$W){if($W===null)$W="<i>NULL</i>";elseif($Ha[$v]&&!is_utf8($W))$W="<i>".lang(array('%d byte','%d bytes'),strlen($W))."</i>";elseif(!strlen($W))$W="&nbsp;";else{$W=h($W);if($T[$v]==254)$W="<code>$W</code>";}if(isset($wd[$v])&&!$f[$wd[$v]]){if($Nc){$O=$I[array_search("table=",$wd)];$x=$wd[$v].urlencode($pe[$O]!=""?$pe[$O]:$O);}else{$x="edit=".urlencode($wd[$v]);foreach($t[$wd[$v]]as$Ua=>$fd)$x.="&where".urlencode("[".bracket_escape($Ua)."]")."=".urlencode($I[$fd]);}$W="<a href='".h(ME.$x)."'>$W</a>";}echo"<td>$W";}}echo($p?"</table>":"<p class='message'>".'No rows.')."\n";return$H;}function
referencable_primary($zf){$H=array();foreach(table_status('',true)as$Vf=>$O){if($Vf!=$zf&&fk_support($O)){foreach(fields($Vf)as$l){if($l["primary"]){if($H[$Vf]){unset($H[$Vf]);break;}$H[$Vf]=$l;}}}}return$H;}function
textarea($A,$X,$J=10,$Xa=80){echo"<textarea name='$A' rows='$J' cols='$Xa' class='sqlarea' spellcheck='false' wrap='off' onkeydown='return textareaKeydown(this, event);'>";if(is_array($X)){foreach($X
as$W)echo
h($W[0])."\n\n\n";}else
echo
h($X);echo"</textarea>";}function
edit_type($v,$l,$Wa,$vc=array()){global$Nf,$T,$Hg,$ee;echo'<td><select name="',$v,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$l["type"]||isset($T[$l["type"]])?array():array($l["type"]))+$Nf+($vc?array('Foreign keys'=>$vc):array()),$l["type"]),'</select>
<td><input name="',$v,'[length]" value="',h($l["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td class="options">';echo"<select name='$v"."[collation]'".(ereg('(char|text|enum|set)$',$l["type"])?"":" class='hidden'").'><option value="">('.'collation'.')'.optionlist($Wa,$l["collation"]).'</select>',($Hg?"<select name='$v"."[unsigned]'".(!$l["type"]||ereg('((^|[^o])int|float|double|decimal)$',$l["type"])?"":" class='hidden'").'><option>'.optionlist($Hg,$l["unsigned"]).'</select>':''),(isset($l['on_update'])?"<select name='$v"."[on_update]'".($l["type"]=="timestamp"?"":" class='hidden'").'>'.optionlist(array(""=>"(".'ON UPDATE'.")","CURRENT_TIMESTAMP"),$l["on_update"]).'</select>':''),($vc?"<select name='$v"."[on_delete]'".(ereg("`",$l["type"])?"":" class='hidden'")."><option value=''>(".'ON DELETE'.")".optionlist(explode("|",$ee),$l["on_delete"])."</select> ":" ");}function
process_length($td){global$Vb;return(preg_match("~^\\s*(?:$Vb)(?:\\s*,\\s*(?:$Vb))*\\s*\$~",$td)&&preg_match_all("~$Vb~",$td,$_d)?implode(",",$_d[0]):preg_replace('~[^0-9,+-]~','',$td));}function
process_type($l,$Va="COLLATE"){global$Hg;return" $l[type]".($l["length"]!=""?"(".process_length($l["length"]).")":"").(ereg('(^|[^o])int|float|double|decimal',$l["type"])&&in_array($l["unsigned"],$Hg)?" $l[unsigned]":"").(ereg('char|text|enum|set',$l["type"])&&$l["collation"]?" $Va ".q($l["collation"]):"");}function
process_field($l,$_g){return
array(idf_escape(trim($l["field"])),process_type($_g),($l["null"]?" NULL":" NOT NULL"),(isset($l["default"])?" DEFAULT ".((ereg("time",$l["type"])&&eregi('^CURRENT_TIMESTAMP$',$l["default"]))||($l["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$l["default"]))?$l["default"]:q($l["default"])):""),($l["type"]=="timestamp"&&$l["on_update"]?" ON UPDATE $l[on_update]":""),(support("comment")&&$l["comment"]!=""?" COMMENT ".q($l["comment"]):""),($l["auto_increment"]?auto_increment():null),);}function
type_class($S){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$v=>$W){if(ereg("$v|$W",$S))return" class='$v'";}}function
edit_fields($m,$Wa,$S="TABLE",$vc=array(),$bb=false){global$g,$Xc;echo'<thead><tr class="wrap">
';if($S=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($S=="TABLE"?'Column name':'Parameter name'),'<td>Type<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>Length
<td>Options
';if($S=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto Increment">AI</acronym>
<td>Default values
',(support("comment")?"<td".($bb?"":" class='hidden'").">".'Comment':"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($m))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.7.1' alt='+' title='".'Add next'."'>",'<script type="text/javascript">row_count = ',count($m),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($m
as$p=>$l){$p++;$qe=$l[($_POST?"orig":"field")];$Bb=(isset($_POST["add"][$p-1])||(isset($l["field"])&&!$_POST["drop_col"][$p]))&&(support("drop_col")||$qe=="");echo'<tr',($Bb?"":" style='display: none;'"),'>
',($S=="PROCEDURE"?"<td>".html_select("fields[$p][inout]",explode("|",$Xc),$l["inout"]):""),'<th>';if($Bb){echo'<input name="fields[',$p,'][field]" value="',h($l["field"]),'" onchange="',($l["field"]!=""||count($m)>1?"":"editingAddRow(this); "),'editingNameChange(this);" maxlength="64" autocapitalize="off">';}echo'<input type="hidden" name="fields[',$p,'][orig]" value="',h($qe),'">
';edit_type("fields[$p]",$l,$Wa,$vc);if($S=="TABLE"){echo'<td>',checkbox("fields[$p][null]",1,$l["null"],"","","block"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$p,'"';if($l["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }"></label><td><?php
echo
checkbox("fields[$p][has_default]",1,$l["has_default"]),'<input name="fields[',$p,'][default]" value="',h($l["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($bb?"":" class='hidden'")."><input name='fields[$p][comment]' value='".h($l["comment"])."' maxlength='".($g->server_info>=5.5?1024:255)."'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$p]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.7.1' alt='+' title='".'Add next'."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$p]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=3.7.1' alt='^' title='".'Move up'."'>&nbsp;"."<input type='image' class='icon' name='down[$p]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=3.7.1' alt='v' title='".'Move down'."'>&nbsp;":""),($qe==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$p]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.7.1' alt='x' title='".'Remove'."' onclick='return !editingRemoveRow(this);'>":""),"\n";}}function
process_fields(&$m){ksort($m);$B=0;if($_POST["up"]){$nd=0;foreach($m
as$v=>$l){if(key($_POST["up"])==$v){unset($m[$v]);array_splice($m,$nd,0,array($l));break;}if(isset($l["field"]))$nd=$B;$B++;}}elseif($_POST["down"]){$xc=false;foreach($m
as$v=>$l){if(isset($l["field"])&&$xc){unset($m[key($_POST["down"])]);array_splice($m,$B,0,array($xc));break;}if(key($_POST["down"])==$v)$xc=$l;$B++;}}elseif($_POST["add"]){$m=array_values($m);array_splice($m,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($z){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($z[0][0].$z[0][0],$z[0][0],substr($z[0],1,-1))),'\\'))."'";}function
grant($Dc,$Se,$f,$de){if(!$Se)return
true;if($Se==array("ALL PRIVILEGES","GRANT OPTION"))return($Dc=="GRANT"?queries("$Dc ALL PRIVILEGES$de WITH GRANT OPTION"):queries("$Dc ALL PRIVILEGES$de")&&queries("$Dc GRANT OPTION$de"));return
queries("$Dc ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$f, ",$Se).$f).$de);}function
drop_create($Fb,$jb,$Gb,$fg,$Hb,$y,$Jd,$Hd,$Id,$ae,$Td){if($_POST["drop"])query_redirect($Fb,$y,$Jd);elseif($ae=="")query_redirect($jb,$y,$Id);elseif($ae!=$Td){$lb=queries($jb);queries_redirect($y,$Hd,$lb&&queries($Fb));if($lb)queries($Gb);}else
queries_redirect($y,$Hd,queries($fg)&&queries($Hb)&&queries($Fb)&&queries($jb));}function
create_trigger($de,$I){global$u;$jg=" $I[Timing] $I[Event]";return"CREATE TRIGGER ".idf_escape($I["Trigger"]).($u=="mssql"?$de.$jg:$jg.$de).rtrim(" $I[Type]\n$I[Statement]",";").";";}function
create_routine($pf,$I){global$Xc;$M=array();$m=(array)$I["fields"];ksort($m);foreach($m
as$l){if($l["field"]!="")$M[]=(ereg("^($Xc)\$",$l["inout"])?"$l[inout] ":"").idf_escape($l["field"]).process_type($l,"CHARACTER SET");}return"CREATE $pf ".idf_escape(trim($I["name"]))." (".implode(", ",$M).")".(isset($_GET["function"])?" RETURNS".process_type($I["returns"],"CHARACTER SET"):"").($I["language"]?" LANGUAGE $I[language]":"").rtrim("\n$I[definition]",";").";";}function
remove_definer($F){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$F);}function
tar_file($pc,$og){$H=pack("a100a8a8a8a12a12",$pc,644,0,0,decoct($og->size),decoct(time()));$Pa=8*32;for($p=0;$p<strlen($H);$p++)$Pa+=ord($H[$p]);$H.=sprintf("%06o",$Pa)."\0 ";echo$H,str_repeat("\0",512-strlen($H));$og->send();echo
str_repeat("\0",511-($og->size+511)%512);}function
ini_bytes($Wc){$W=ini_get($Wc);switch(strtolower(substr($W,-1))){case'g':$W*=1024;case'm':$W*=1024;case'k':$W*=1024;}return$W;}$ee="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
TmpFile(){$this->handler=tmpfile();}function
write($fb){$this->size+=strlen($fb);fwrite($this->handler,$fb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$Vb="'(?:''|[^'\\\\]|\\\\.)*+'";$Xc="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$m=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET,$m),1));exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$m=fields($a);if(!$m)$k=error();$P=table_status1($a,true);page_header(($m&&is_view($P)?'View':'Table').": ".h($a),$k);$b->selectLinks($P);$ab=$P["Comment"];if($ab!="")echo"<p>".'Comment'.": ".h($ab)."\n";if($m){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Column'."<td>".'Type'.(support("comment")?"<td>".'Comment':"")."</thead>\n";foreach($m
as$l){echo"<tr".odd()."><th>".h($l["field"]),"<td title='".h($l["collation"])."'>".h($l["full_type"]).($l["null"]?" <i>NULL</i>":"").($l["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(isset($l["default"])?" [<b>".h($l["default"])."</b>]":""),(support("comment")?"<td>".nbsp($l["comment"]):""),"\n";}echo"</table>\n";if(!is_view($P)){echo"<h3 id='indexes'>".'Indexes'."</h3>\n";$t=indexes($a);if($t){echo"<table cellspacing='0'>\n";foreach($t
as$A=>$s){ksort($s["columns"]);$Pe=array();foreach($s["columns"]as$v=>$W)$Pe[]="<i>".h($W)."</i>".($s["lengths"][$v]?"(".$s["lengths"][$v].")":"").($s["descs"][$v]?" DESC":"");echo"<tr title='".h($A)."'><th>$s[type]<td>".implode(", ",$Pe)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($a).'">'.'Alter indexes'."</a>\n";if(fk_support($P)){echo"<h3 id='foreign-keys'>".'Foreign keys'."</h3>\n";$vc=foreign_keys($a);if($vc){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Source'."<td>".'Target'."<td>".'ON DELETE'."<td>".'ON UPDATE'.($u!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($vc
as$A=>$n){echo"<tr title='".h($A)."'>","<th><i>".implode("</i>, <i>",array_map('h',$n["source"]))."</i>","<td><a href='".h($n["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($n["db"]),ME):($n["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($n["ns"]),ME):ME))."table=".urlencode($n["table"])."'>".($n["db"]!=""?"<b>".h($n["db"])."</b>.":"").($n["ns"]!=""?"<b>".h($n["ns"])."</b>.":"").h($n["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$n["target"]))."</i>)","<td>".nbsp($n["on_delete"])."\n","<td>".nbsp($n["on_update"])."\n",($u=="sqlite"?"":'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($A)).'">'.'Alter'.'</a>');}echo"</table>\n";}if($u!="sqlite")echo'<p><a href="'.h(ME).'foreign='.urlencode($a).'">'.'Add foreign key'."</a>\n";}if(support("trigger")){echo"<h3 id='triggers'>".'Triggers'."</h3>\n";$zg=triggers($a);if($zg){echo"<table cellspacing='0'>\n";foreach($zg
as$v=>$W)echo"<tr valign='top'><td>$W[0]<td>$W[1]<th>".h($v)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($v))."'>".'Alter'."</a>\n";echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($a).'">'.'Add trigger'."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header('Database schema',"",array(),DB.($_GET["ns"]?".$_GET[ns]":""));$Xf=array();$Yf=array();$A="adminer_schema";$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$A-".DB]?"$A-".DB:$A)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$_d,PREG_SET_ORDER);foreach($_d
as$p=>$z){$Xf[$z[1]]=array($z[2],$z[3]);$Yf[]="\n\t'".js_escape($z[1])."': [ $z[2], $z[3] ]";}$qg=0;$Ea=-1;$vf=array();$df=array();$rd=array();foreach(table_status('',true)as$O=>$P){if(is_view($P))continue;$He=0;$vf[$O]["fields"]=array();foreach(fields($O)as$A=>$l){$He+=1.25;$l["pos"]=$He;$vf[$O]["fields"][$A]=$l;}$vf[$O]["pos"]=($Xf[$O]?$Xf[$O]:array($qg,0));foreach($b->foreignKeys($O)as$W){if(!$W["db"]){$pd=$Ea;if($Xf[$O][1]||$Xf[$W["table"]][1])$pd=min(floatval($Xf[$O][1]),floatval($Xf[$W["table"]][1]))-1;else$Ea-=.1;while($rd[(string)$pd])$pd-=.0001;$vf[$O]["references"][$W["table"]][(string)$pd]=array($W["source"],$W["target"]);$df[$W["table"]][$O][(string)$pd]=$W["target"];$rd[(string)$pd]=true;}}$qg=max($qg,$vf[$O]["pos"][0]+2.5+$He);}echo'<div id="schema" style="height: ',$qg,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$Yf)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$qg,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($vf
as$A=>$O){echo"<div class='table' style='top: ".$O["pos"][0]."em; left: ".$O["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($A).'"><b>'.h($A)."</b></a>";foreach($O["fields"]as$l){$W='<span'.type_class($l["type"]).' title="'.h($l["full_type"].($l["null"]?" NULL":'')).'">'.h($l["field"]).'</span>';echo"<br>".($l["primary"]?"<i>$W</i>":$W);}foreach((array)$O["references"]as$dg=>$ff){foreach($ff
as$pd=>$af){$qd=$pd-$Xf[$A][1];$p=0;foreach($af[0]as$Ff)echo"\n<div class='references' title='".h($dg)."' id='refs$pd-".($p++)."' style='left: $qd"."em; top: ".$O["fields"][$Ff]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$qd)."em;'></div></div>";}}foreach((array)$df[$A]as$dg=>$ff){foreach($ff
as$pd=>$f){$qd=$pd-$Xf[$A][1];$p=0;foreach($f
as$cg)echo"\n<div class='references' title='".h($dg)."' id='refd$pd-".($p++)."' style='left: $qd"."em; top: ".$O["fields"][$cg]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=3.7.1'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$qd)."em;'></div></div>";}}echo"\n</div>\n";}foreach($vf
as$A=>$O){foreach((array)$O["references"]as$dg=>$ff){foreach($ff
as$pd=>$af){$Md=$qg;$Dd=-10;foreach($af[0]as$v=>$Ff){$Ie=$O["pos"][0]+$O["fields"][$Ff]["pos"];$Je=$vf[$dg]["pos"][0]+$vf[$dg]["fields"][$af[1][$v]]["pos"];$Md=min($Md,$Ie,$Je);$Dd=max($Dd,$Ie,$Je);}echo"<div class='references' id='refl$pd' style='left: $pd"."em; top: $Md"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($Dd-$Md)."em;'></div></div>\n";}}}echo'</div>
<p><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">Permanent link</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$k){$hb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$v)$hb.="&$v=".urlencode($_POST[$v]);cookie("adminer_export",substr($hb,1));$Q=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$hc=dump_headers((count($Q)==1?key($Q):DB),(DB==""||count($Q)>1));$cd=ereg('sql',$_POST["format"]);if($cd)echo"-- Adminer $ia ".$Eb[DRIVER]." dump

".($u!="sql"?"":"SET NAMES utf8;
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET time_zone = ".q(substr(preg_replace('~^[^-]~','+\0',$g->result("SELECT TIMEDIFF(NOW(), UTC_TIMESTAMP)")),0,6)).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
");$Of=$_POST["db_style"];$i=array(DB);if(DB==""){$i=$_POST["databases"];if(is_string($i))$i=explode("\n",rtrim(str_replace("\r","",$i),"\n"));}foreach((array)$i
as$j){$b->dumpDatabase($j);if($g->select_db($j)){if($cd&&ereg('CREATE',$Of)&&($jb=$g->result("SHOW CREATE DATABASE ".idf_escape($j),1))){if($Of=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($j).";\n";echo"$jb;\n";}if($cd){if($Of)echo
use_sql($j).";\n\n";$ue="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$pf){foreach(get_rows("SHOW $pf STATUS WHERE Db = ".q($j),null,"-- ")as$I)$ue.=($Of!='DROP+CREATE'?"DROP $pf IF EXISTS ".idf_escape($I["Name"]).";;\n":"").remove_definer($g->result("SHOW CREATE $pf ".idf_escape($I["Name"]),2)).";;\n\n";}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$I)$ue.=($Of!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($I["Name"]).";;\n":"").remove_definer($g->result("SHOW CREATE EVENT ".idf_escape($I["Name"]),3)).";;\n\n";}if($ue)echo"DELIMITER ;;\n\n$ue"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Y=array();foreach(table_status('',true)as$A=>$P){$O=(DB==""||in_array($A,(array)$_POST["tables"]));$ob=(DB==""||in_array($A,(array)$_POST["data"]));if($O||$ob){if($hc=="tar"){$og=new
TmpFile;ob_start(array($og,'write'),1e5);}$b->dumpTable($A,($O?$_POST["table_style"]:""),(is_view($P)?2:0));if(is_view($P))$Y[]=$A;elseif($ob){$m=fields($A);$b->dumpData($A,$_POST["data_style"],"SELECT *".convert_fields($m,$m)." FROM ".table($A));}if($cd&&$_POST["triggers"]&&$O&&($zg=trigger_sql($A,$_POST["table_style"])))echo"\nDELIMITER ;;\n$zg\nDELIMITER ;\n";if($hc=="tar"){ob_end_flush();tar_file((DB!=""?"":"$j/")."$A.csv",$og);}elseif($cd)echo"\n";}}foreach($Y
as$Sg)$b->dumpTable($Sg,$_POST["table_style"],1);if($hc=="tar")echo
pack("x512");}}}if($cd)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header('Export',$k,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$sb=array('','USE','DROP+CREATE','CREATE');$Zf=array('','DROP+CREATE','CREATE');$pb=array('','TRUNCATE+INSERT','INSERT');if($u=="sql")$pb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$I);if(!$I)$I=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($I["events"])){$I["routines"]=$I["events"]=($_GET["dump"]=="");$I["triggers"]=$I["table_style"];}echo"<tr><th>".'Output'."<td>".html_select("output",$b->dumpOutput(),$I["output"],0)."\n";echo"<tr><th>".'Format'."<td>".html_select("format",$b->dumpFormat(),$I["format"],0)."\n";echo($u=="sqlite"?"":"<tr><th>".'Database'."<td>".html_select('db_style',$sb,$I["db_style"]).(support("routine")?checkbox("routines",1,$I["routines"],'Routines'):"").(support("event")?checkbox("events",1,$I["events"],'Events'):"")),"<tr><th>".'Tables'."<td>".html_select('table_style',$Zf,$I["table_style"]).checkbox("auto_increment",1,$I["auto_increment"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$I["triggers"],'Triggers'):""),"<tr><th>".'Data'."<td>".html_select('data_style',$pb,$I["data_style"]),'</table>
<p><input type="submit" value="Export">
<input type="hidden" name="token" value="',$R,'">

<table cellspacing="0">
';$Me=array();if(DB!=""){$Oa=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$Oa onclick='formCheck(this, /^tables\\[/);'>".'Tables'."</label>","<th style='text-align: right;'><label class='block'>".'Data'."<input type='checkbox' id='check-data'$Oa onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Y="";$ag=tables_list();foreach($ag
as$A=>$S){$Le=ereg_replace("_.*","",$A);$Oa=($a==""||$a==(substr($a,-1)=="%"?"$Le%":$A));$Pe="<tr><td>".checkbox("tables[]",$A,$Oa,$A,"checkboxClick(event, this); formUncheck('check-tables');","block");if($S!==null&&!eregi("table",$S))$Y.="$Pe\n";else
echo"$Pe<td align='right'><label class='block'><span id='Rows-".h($A)."'></span>".checkbox("data[]",$A,$Oa,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$Me[$Le]++;}echo$Y;if($ag)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}else{echo"<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Database'."</label></thead>\n";$i=$b->databases();if($i){foreach($i
as$j){if(!information_schema($j)){$Le=ereg_replace("_.*","",$j);echo"<tr><td>".checkbox("databases[]",$j,$a==""||$a=="$Le%",$j,"formUncheck('check-databases');","block")."\n";$Me[$Le]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$rc=true;foreach($Me
as$v=>$W){if($v!=""&&$W>1){echo($rc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$v%")."'>".h($v)."</a>";$rc=false;}}}elseif(isset($_GET["privileges"])){page_header('Privileges');$G=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$Dc=$G;if(!$G)$G=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($Dc?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".'Username'."<th>".'Server'."<th>&nbsp;</thead>\n";while($I=$G->fetch_assoc())echo'<tr'.odd().'><td>'.h($I["User"])."<td>".h($I["Host"]).'<td><a href="'.h(ME.'user='.urlencode($I["User"]).'&host='.urlencode($I["Host"])).'">'.'Edit'."</a>\n";if(!$Dc||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".'Edit'."'>\n";echo"</table>\n","</form>\n",'<p><a href="'.h(ME).'user=">'.'Create user'."</a>";}elseif(isset($_GET["sql"])){if(!$k&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$Lc=&get_session("queries");$Kc=&$Lc[DB];if(!$k&&$_POST["clear"]){$Kc=array();redirect(remove_from_uri("history"));}page_header('SQL command',$k);if(!$k&&$_POST){$zc=false;$F=$_POST["query"];if($_POST["webfile"]){$zc=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$F=($zc?fread($zc,1e6):false);}elseif($_FILES&&$_FILES["sql_file"]["error"][0]!=4)$F=get_file("sql_file",true);if(is_string($F)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($F)+memory_get_usage()+8e6));if($F!=""&&strlen($F)<1e6){$E=$F.(ereg(";[ \t\r\n]*\$",$F)?"":";");if(!$Kc||reset(end($Kc))!=$E){restart_session();$Kc[]=array($E,time());set_session("queries",$Lc);stop_session();}}$Gf="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\n)";$wb=";";$B=0;$Rb=true;$h=connect();if(is_object($h)&&DB!="")$h->select_db(DB);$Za=0;$Xb=array();$vd=0;$ze='[\'"'.($u=="sql"?'`#':($u=="sqlite"?'`[':($u=="mssql"?'[':''))).']|/\\*|-- |$'.($u=="pgsql"?'|\\$[^$]*\\$':'');$rg=microtime();parse_str($_COOKIE["adminer_export"],$pa);$Jb=$b->dumpFormat();unset($Jb["sql"]);while($F!=""){if(!$B&&preg_match("~^$Gf*DELIMITER\\s+(\\S+)~i",$F,$z)){$wb=$z[1];$F=substr($F,strlen($z[0]));}else{preg_match('('.preg_quote($wb)."\\s*|$ze)",$F,$z,PREG_OFFSET_CAPTURE,$B);list($xc,$He)=$z[0];if(!$xc&&$zc&&!feof($zc))$F.=fread($zc,1e5);else{if(!$xc&&rtrim($F)=="")break;$B=$He+strlen($xc);if($xc&&rtrim($xc)!=$wb){while(preg_match('('.($xc=='/*'?'\\*/':($xc=='['?']':(ereg('^-- |^#',$xc)?"\n":preg_quote($xc)."|\\\\."))).'|$)s',$F,$z,PREG_OFFSET_CAPTURE,$B)){$tf=$z[0][0];if(!$tf&&$zc&&!feof($zc))$F.=fread($zc,1e5);else{$B=$z[0][1]+strlen($tf);if($tf[0]!="\\")break;}}}else{$Rb=false;$E=substr($F,0,$He);$Za++;$Pe="<pre id='sql-$Za'><code class='jush-$u'>".shorten_utf8(trim($E),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$Pe;ob_flush();flush();}$Jf=microtime();if($g->multi_query($E)&&is_object($h)&&preg_match("~^$Gf*USE\\b~isU",$E))$h->query($E);do{$G=$g->store_result();$Sb=microtime();$ig=" <span class='time'>(".format_time($Jf,$Sb).")</span>".(strlen($E)<1000?" <a href='".h(ME)."sql=".urlencode(trim($E))."'>".'Edit'."</a>":"");if($g->error){echo($_POST["only_errors"]?$Pe:""),"<p class='error'>".'Error in query'.($g->errno?" ($g->errno)":"").": ".error()."\n";$Xb[]=" <a href='#sql-$Za'>$Za</a>";if($_POST["error_stops"])break
2;}elseif(is_object($G)){$pe=select($G,$h);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n","<p>".($G->num_rows?lang(array('%d row','%d rows'),$G->num_rows):"").$ig;$q="export-$Za";$gc=", <a href='#$q' onclick=\"return !toggle('$q');\">".'Export'."</a><span id='$q' class='hidden'>: ".html_select("output",$b->dumpOutput(),$pa["output"])." ".html_select("format",$Jb,$pa["format"])."<input type='hidden' name='query' value='".h($E)."'>"." <input type='submit' name='export' value='".'Export'."'><input type='hidden' name='token' value='$R'></span>\n";if($h&&preg_match("~^($Gf|\\()*SELECT\\b~isU",$E)&&($fc=explain($h,$E))){$q="explain-$Za";echo", <a href='#$q' onclick=\"return !toggle('$q');\">EXPLAIN</a>$gc","<div id='$q' class='hidden'>\n";select($fc,$h,($u=="sql"?"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/explain-output.html#explain_":""),$pe);echo"</div>\n";}else
echo$gc;echo"</form>\n";}}else{if(preg_match("~^$Gf*(CREATE|DROP|ALTER)$Gf+(DATABASE|SCHEMA)\\b~isU",$E)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($g->info)."'>".lang(array('Query executed OK, %d row affected.','Query executed OK, %d rows affected.'),$g->affected_rows)."$ig\n";}$Jf=$Sb;}while($g->next_result());$vd+=substr_count($E.$xc,"\n");$F=substr($F,$B);$B=0;}}}}if($Rb)echo"<p class='message'>".'No commands to execute.'."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(array('%d query executed OK.','%d queries executed OK.'),$Za-count($Xb))," <span class='time'>(".format_time($rg,microtime()).")</span>\n";}elseif($Xb&&$Za>1)echo"<p class='error'>".'Error in query'.": ".implode("",$Xb)."\n";}else
echo"<p class='error'>".upload_error($F)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
<p>';$E=$_GET["sql"];if($_POST)$E=$_POST["query"];elseif($_GET["history"]=="all")$E=$Kc;elseif($_GET["history"]!="")$E=$Kc[$_GET["history"]][0];textarea("query",$E,20);echo($_POST?"":"<script type='text/javascript'>focus(document.getElementsByTagName('textarea')[0]);</script>\n"),"<p>".(ini_bool("file_uploads")?'File upload'.': <input type="file" name="sql_file[]" multiple'.($_FILES&&$_FILES["sql_file"]["error"][0]!=4?'':' onchange="this.form[\'only_errors\'].checked = true;"').'> (&lt; '.ini_get("upload_max_filesize").'B)':'File uploads are disabled.'),'<p>
<input type="submit" value="Execute" title="Ctrl+Enter">
',checkbox("error_stops",1,$_POST["error_stops"],'Stop on error')."\n",checkbox("only_errors",1,$_POST["only_errors"],'Show only errors')."\n";print_fieldset("webfile",'From server',$_POST["webfile"],"document.getElementById('form')['only_errors'].checked = true; ");echo
sprintf('Webserver file %s',"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Run file'.'">',"</div></fieldset>\n";if($Kc){print_fieldset("history",'History',$_GET["history"]!="");for($W=end($Kc);$W;$W=prev($Kc)){$v=key($Kc);list($E,$ig)=$W;echo'<a href="'.h(ME."sql=&history=$v").'">'.'Edit'."</a> <span class='time' title='".@date('Y-m-d',$ig)."'>".@date("H:i:s",$ig)."</span> <code class='jush-$u'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$E)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".'Clear'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Edit all'."</a>\n","</div></fieldset>\n";}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$m=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$m):""):where($_GET,$m));$Ig=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($m
as$A=>$l){if(!isset($l["privileges"][$Ig?"update":"insert"])||$b->fieldName($l)=="")unset($m[$A]);}if($_POST&&!$k&&!isset($_GET["select"])){$y=$_POST["referer"];if($_POST["insert"])$y=($Ig?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$y))$y=ME."select=".urlencode($a);$t=indexes($a);$Dg=unique_array($_GET["where"],$t);$Xe="\nWHERE $Z";if(isset($_POST["delete"])){$F="FROM ".table($a);query_redirect("DELETE".($Dg?" $F$Xe":limit1($F,$Xe)),$y,'Item has been deleted.');}else{$M=array();foreach($m
as$A=>$l){$W=process_input($l);if($W!==false&&$W!==null)$M[idf_escape($A)]=($Ig?"\n".idf_escape($A)." = $W":$W);}if($Ig){if(!$M)redirect($y);$F=table($a)." SET".implode(",",$M);query_redirect("UPDATE".($Dg?" $F$Xe":limit1($F,$Xe)),$y,'Item has been updated.');}else{$G=insert_into($a,$M);$od=($G?last_id():0);queries_redirect($y,sprintf('Item%s has been inserted.',($od?" $od":"")),$G);}}}$Vf=$b->tableName(table_status1($a,true));page_header(($Ig?'Edit':'Insert'),$k,array("select"=>array($a,$Vf)),$Vf);$I=null;if($_POST["save"])$I=(array)$_POST["fields"];elseif($Z){$K=array();foreach($m
as$A=>$l){if(isset($l["privileges"]["select"])){$wa=convert_field($l);if($_POST["clone"]&&$l["auto_increment"])$wa="''";if($u=="sql"&&ereg("enum|set",$l["type"]))$wa="1*".idf_escape($A);$K[]=($wa?"$wa AS ":"").idf_escape($A);}}$I=array();if($K){$J=get_rows("SELECT".limit(implode(", ",$K)." FROM ".table($a)," WHERE $Z",(isset($_GET["select"])?2:1)));$I=(isset($_GET["select"])&&count($J)!=1?null:reset($J));}}if($I===false)echo"<p class='error'>".'No rows.'."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$m)echo"<p class='error'>".'You have no privileges to update this table.'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($m
as$A=>$l){echo"<tr><th>".$b->fieldName($l);$vb=$_GET["set"][bracket_escape($A)];if($vb===null){$vb=$l["default"];if($l["type"]=="bit"&&ereg("^b'([01]*)'\$",$vb,$gf))$vb=$gf[1];}$X=($I!==null?($I[$A]!=""&&$u=="sql"&&ereg("enum|set",$l["type"])?(is_array($I[$A])?array_sum($I[$A]):+$I[$A]):$I[$A]):(!$Ig&&$l["auto_increment"]?"":(isset($_GET["select"])?false:$vb)));if(!$_POST["save"]&&is_string($X))$X=$b->editVal($X,$l);$o=($_POST["save"]?(string)$_POST["function"][$A]:($Ig&&$l["on_update"]=="CURRENT_TIMESTAMP"?"now":($X===false?null:($X!==null?'':'NULL'))));if(ereg("time",$l["type"])&&$X=="CURRENT_TIMESTAMP"){$X="";$o="now";}input($l,$X,$o);echo"\n";}echo"</table>\n";}echo'<p>
';if($m){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Ig?'Save and continue edit':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n";}echo($Ig?"<input type='submit' name='delete' value='".'Delete'."' onclick=\"return confirm('".'Are you sure?'."');\">\n":($_POST||!$m?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["create"])){$a=$_GET["create"];$_e=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$cf=referencable_primary($a);$vc=array();foreach($cf
as$Vf=>$l)$vc[str_replace("`","``",$Vf)."`".str_replace("`","``",$l["field"])]=$Vf;$se=array();$P=array();if($a!=""){$se=fields($a);$P=table_status($a);if(!$P)$k='No tables.';}$I=$_POST;$I["fields"]=(array)$I["fields"];if($I["auto_increment_col"])$I["fields"][$I["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($I["fields"])&&!$k){if($_POST["drop"])query_redirect("DROP TABLE ".table($a),substr(ME,0,-1),'Table has been dropped.');else{$m=array();$va=array();$Kg=false;$tc=array();ksort($I["fields"]);$re=reset($se);$ta=" FIRST";foreach($I["fields"]as$v=>$l){$n=$vc[$l["type"]];$_g=($n!==null?$cf[$n]:$l);if($l["field"]!=""){if(!$l["has_default"])$l["default"]=null;if($v==$I["auto_increment_col"])$l["auto_increment"]=true;$Ue=process_field($l,$_g);$va[]=array($l["orig"],$Ue,$ta);if($Ue!=process_field($re,$re)){$m[]=array($l["orig"],$Ue,$ta);if($l["orig"]!=""||$ta)$Kg=true;}if($n!==null)$tc[idf_escape($l["field"])]=($a!=""&&$u!="sqlite"?"ADD":" ")." FOREIGN KEY (".idf_escape($l["field"]).") REFERENCES ".table($vc[$l["type"]])." (".idf_escape($_g["field"]).")".(ereg("^($ee)\$",$l["on_delete"])?" ON DELETE $l[on_delete]":"");$ta=" AFTER ".idf_escape($l["field"]);}elseif($l["orig"]!=""){$Kg=true;$m[]=array($l["orig"]);}if($l["orig"]!=""){$re=next($se);if(!$re)$ta="";}}$Be="";if(in_array($I["partition_by"],$_e)){$Ce=array();if($I["partition_by"]=='RANGE'||$I["partition_by"]=='LIST'){foreach(array_filter($I["partition_names"])as$v=>$W){$X=$I["partition_values"][$v];$Ce[]="\n  PARTITION ".idf_escape($W)." VALUES ".($I["partition_by"]=='RANGE'?"LESS THAN":"IN").($X!=""?" ($X)":" MAXVALUE");}}$Be.="\nPARTITION BY $I[partition_by]($I[partition])".($Ce?" (".implode(",",$Ce)."\n)":($I["partitions"]?" PARTITIONS ".(+$I["partitions"]):""));}elseif(support("partitioning")&&ereg("partitioned",$P["Create_options"]))$Be.="\nREMOVE PARTITIONING";$_='Table has been altered.';if($a==""){cookie("adminer_engine",$I["Engine"]);$_='Table has been created.';}$A=trim($I["name"]);queries_redirect(ME."table=".urlencode($A),$_,alter_table($a,$A,($u=="sqlite"&&($Kg||$tc)?$va:$m),$tc,$I["Comment"],($I["Engine"]&&$I["Engine"]!=$P["Engine"]?$I["Engine"]:""),($I["Collation"]&&$I["Collation"]!=$P["Collation"]?$I["Collation"]:""),($I["Auto_increment"]!=""?+$I["Auto_increment"]:""),$Be));}}page_header(($a!=""?'Alter table':'Create table'),$k,array("table"=>$a),$a);if(!$_POST){$I=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($T["int"])?"int":(isset($T["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$I=$P;$I["name"]=$a;$I["fields"]=array();if(!$_GET["auto_increment"])$I["Auto_increment"]="";foreach($se
as$l){$l["has_default"]=isset($l["default"]);$I["fields"][]=$l;}if(support("partitioning")){$_c="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$G=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $_c ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($I["partition_by"],$I["partitions"],$I["partition"])=$G->fetch_row();$Ce=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $_c AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$Ce[""]="";$I["partition_names"]=array_keys($Ce);$I["partition_values"]=array_values($Ce);}}}$Wa=collations();$Ub=engines();foreach($Ub
as$Tb){if(!strcasecmp($Tb,$I["Engine"])){$I["Engine"]=$Tb;break;}}echo'
<form action="" method="post" id="form">
<p>
Table name: <input name="name" maxlength="64" value="',h($I["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST){?><script type='text/javascript'>focus(document.getElementById('form')['name']);</script><?php }echo($Ub?html_select("Engine",array(""=>"(".'engine'.")")+$Ub,$I["Engine"]):""),' ',($Wa&&!ereg("sqlite|mssql",$u)?html_select("Collation",array(""=>"(".'collation'.")")+$Wa,$I["Collation"]):""),' <input type="submit" value="Save">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$bb=($_POST?$_POST["comments"]:$I["Comment"]!="");if(!$_POST&&!$bb){foreach($I["fields"]as$l){if($l["comment"]!=""){$bb=true;break;}}}edit_fields($I["fields"],$Wa,"TABLE",$vc,$bb);echo'</table>
<p>
Auto Increment: <input type="number" name="Auto_increment" size="6" value="',h($I["Auto_increment"]),'">
',checkbox("defaults",1,true,'Default values',"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly' onclick=\"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();\"".($bb?" checked":"").">".'Comment'."</label>".' <input name="Comment" id="Comment" value="'.h($I["Comment"]).'" maxlength="'.($g->server_info>=5.5?2048:60).'"'.($bb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="Save">
';if($_GET["create"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}if(support("partitioning")){$Ae=ereg('RANGE|LIST',$I["partition_by"]);print_fieldset("partition",'Partition by',$I["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$_e,$I["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($I["partition"]),'">)
Partitions: <input type="number" name="partitions" class="size" value="',h($I["partitions"]),'"',($Ae||!$I["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($Ae?"":" class='hidden'"),'>
<thead><tr><th>Partition name<th>Values</thead>
';foreach($I["partition_names"]as$v=>$W){echo'<tr>','<td><input name="partition_names[]" value="'.h($W).'"'.($v==count($I["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($I["partition_values"][$v]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$Sc=array("PRIMARY","UNIQUE","INDEX");$P=table_status($a,true);if(eregi("MyISAM|M?aria".($g->server_info>=5.6?"|InnoDB":""),$P["Engine"]))$Sc[]="FULLTEXT";$t=indexes($a);if($u=="sqlite"){unset($Sc[0]);unset($t[""]);}$I=$_POST;if($_POST&&!$k&&!$_POST["add"]){$c=array();foreach($I["indexes"]as$s){$A=$s["name"];if(in_array($s["type"],$Sc)){$f=array();$ud=array();$yb=array();$M=array();ksort($s["columns"]);foreach($s["columns"]as$v=>$e){if($e!=""){$td=$s["lengths"][$v];$xb=$s["descs"][$v];$M[]=idf_escape($e).($td?"(".(+$td).")":"").($xb?" DESC":"");$f[]=$e;$ud[]=($td?$td:null);$yb[]=$xb;}}if($f){$ec=$t[$A];if($ec){ksort($ec["columns"]);ksort($ec["lengths"]);ksort($ec["descs"]);if($s["type"]==$ec["type"]&&array_values($ec["columns"])===$f&&(!$ec["lengths"]||array_values($ec["lengths"])===$ud)&&array_values($ec["descs"])===$yb){unset($t[$A]);continue;}}$c[]=array($s["type"],$A,"(".implode(", ",$M).")");}}}foreach($t
as$A=>$ec)$c[]=array($ec["type"],$A,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),'Indexes have been altered.',alter_indexes($a,$c));}page_header('Indexes',$k,array("table"=>$a),$a);$m=array_keys(fields($a));if($_POST["add"]){foreach($I["indexes"]as$v=>$s){if($s["columns"][count($s["columns"])]!="")$I["indexes"][$v]["columns"][]="";}$s=end($I["indexes"]);if($s["type"]||array_filter($s["columns"],'strlen')||array_filter($s["lengths"],'strlen')||array_filter($s["descs"]))$I["indexes"][]=array("columns"=>array(1=>""));}if(!$I){foreach($t
as$v=>$s){$t[$v]["name"]=$v;$t[$v]["columns"][]="";}$t[]=array("columns"=>array(1=>""));$I["indexes"]=$t;}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>Index Type<th>Column (length)<th>Name</thead>
';$fd=1;foreach($I["indexes"]as$s){echo"<tr><td>".html_select("indexes[$fd][type]",array(-1=>"")+$Sc,$s["type"],($fd==count($I["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($s["columns"]);$p=1;foreach($s["columns"]as$v=>$e){echo"<span>".html_select("indexes[$fd][columns][$p]",array(-1=>"")+$m,$e,($p==count($s["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($u=="sql"?"":$_GET["indexes"]."_")."');"),($u=="sql"||$u=="mssql"?"<input type='number' name='indexes[$fd][lengths][$p]' class='size' value='".h($s["lengths"][$v])."'>":""),($u!="sql"?checkbox("indexes[$fd][descs][$p]",1,$s["descs"][$v],'descending'):"")," </span>";$p++;}echo"<td><input name='indexes[$fd][name]' value='".h($s["name"])."' autocapitalize='off'>\n";$fd++;}echo'</table>
<p>
<input type="submit" value="Save">
<noscript><p><input type="submit" name="add" value="Add next"></noscript>
<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["database"])){$I=$_POST;if($_POST&&!$k&&!isset($_POST["add_x"])){restart_session();$A=trim($I["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Database has been dropped.',drop_databases(array(DB)));}elseif(DB!==$A){if(DB!=""){$_GET["db"]=$A;queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($A),'Database has been renamed.',rename_database($A,$I["collation"]));}else{$i=explode("\n",str_replace("\r","",$A));$Pf=true;$nd="";foreach($i
as$j){if(count($i)==1||$j!=""){if(!create_database($j,$I["collation"]))$Pf=false;$nd=$j;}}queries_redirect(ME."db=".urlencode($nd),'Database has been created.',$Pf);}}else{if(!$I["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($A).(eregi('^[a-z0-9_]+$',$I["collation"])?" COLLATE $I[collation]":""),substr(ME,0,-1),'Database has been altered.');}}page_header(DB!=""?'Alter database':'Create database',$k,array(),DB);$Wa=collations();$A=DB;if($_POST)$A=$I["name"];elseif(DB!="")$I["collation"]=db_collation(DB,$Wa);elseif($u=="sql"){foreach(get_vals("SHOW GRANTS")as$Dc){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$Dc,$z)&&$z[1]){$A=stripcslashes(idf_unescape("`$z[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($A,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($A).'</textarea><br>':'<input name="name" id="name" value="'.h($A).'" maxlength="64" autocapitalize="off">')."\n".($Wa?html_select("collation",array(""=>"(".'collation'.")")+$Wa,$I["collation"]):"");?>
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="Save">
<?php
if(DB!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.7.1' alt='+' title='".'Add next'."'>\n";echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["scheme"])){$I=$_POST;if($_POST&&!$k){$x=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$x,'Schema has been dropped.');else{$A=trim($I["name"]);$x.=urlencode($A);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($A),$x,'Schema has been created.');elseif($_GET["ns"]!=$A)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($A),$x,'Schema has been altered.');else
redirect($x);}}page_header($_GET["ns"]!=""?'Alter schema':'Create schema',$k);if(!$I)$I["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($I["name"]);?>" autocapitalize="off">
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="Save">
<?php
if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header('Call'.": ".h($da),$k);$pf=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$Qc=array();$ue=array();foreach($pf["fields"]as$p=>$l){if(substr($l["inout"],-3)=="OUT")$ue[$p]="@".idf_escape($l["field"])." AS ".idf_escape($l["field"]);if(!$l["inout"]||substr($l["inout"],0,2)=="IN")$Qc[]=$p;}if(!$k&&$_POST){$La=array();foreach($pf["fields"]as$v=>$l){if(in_array($v,$Qc)){$W=process_input($l);if($W===false)$W="''";if(isset($ue[$v]))$g->query("SET @".idf_escape($l["field"])." = $W");}$La[]=(isset($ue[$v])?"@".idf_escape($l["field"]):$W);}$F=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($da)."(".implode(", ",$La).")";echo"<p><code class='jush-$u'>".h($F)."</code> <a href='".h(ME)."sql=".urlencode($F)."'>".'Edit'."</a>\n";if(!$g->multi_query($F))echo"<p class='error'>".error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$G=$g->store_result();if(is_object($G))select($G,$h);else
echo"<p class='message'>".lang(array('Routine has been called, %d row affected.','Routine has been called, %d rows affected.'),$g->affected_rows)."\n";}while($g->next_result());if($ue)select($g->query("SELECT ".implode(", ",$ue)));}}echo'
<form action="" method="post">
';if($Qc){echo"<table cellspacing='0'>\n";foreach($Qc
as$v){$l=$pf["fields"][$v];$A=$l["field"];echo"<tr><th>".$b->fieldName($l);$X=$_POST["fields"][$A];if($X!=""){if($l["type"]=="enum")$X=+$X;if($l["type"]=="set")$X=array_sum($X);}input($l,$X,(string)$_POST["function"][$A]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Call">
<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$A=$_GET["name"];$I=$_POST;if($_POST&&!$k&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"])query_redirect("ALTER TABLE ".table($a)."\nDROP ".($u=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($A),ME."table=".urlencode($a),'Foreign key has been dropped.');else{$Ff=array_filter($I["source"],'strlen');ksort($Ff);$cg=array();foreach($Ff
as$v=>$W)$cg[$v]=$I["target"][$v];query_redirect("ALTER TABLE ".table($a).($A!=""?"\nDROP ".($u=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($A).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$Ff)).") REFERENCES ".table($I["table"])." (".implode(", ",array_map('idf_escape',$cg)).")".(ereg("^($ee)\$",$I["on_delete"])?" ON DELETE $I[on_delete]":"").(ereg("^($ee)\$",$I["on_update"])?" ON UPDATE $I[on_update]":""),ME."table=".urlencode($a),($A!=""?'Foreign key has been altered.':'Foreign key has been created.'));$k='Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.'."<br>$k";}}page_header('Foreign key',$k,array("table"=>$a),$a);if($_POST){ksort($I["source"]);if($_POST["add"])$I["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$I["target"]=array();}elseif($A!=""){$vc=foreign_keys($a);$I=$vc[$A];$I["source"][]="";}else{$I["table"]=$a;$I["source"]=array("");}$Ff=array_keys(fields($a));$cg=($a===$I["table"]?$Ff:array_keys(fields($I["table"])));$bf=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($I["db"]==""&&$I["ns"]==""){echo'Target table:
',html_select("table",$bf,$I["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Change"></noscript>
<table cellspacing="0">
<thead><tr><th>Source<th>Target</thead>
';$fd=0;foreach($I["source"]as$v=>$W){echo"<tr>","<td>".html_select("source[".(+$v)."]",array(-1=>"")+$Ff,$W,($fd==count($I["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$v)."]",$cg,$I["target"][$v]);$fd++;}echo'</table>
<p>
ON DELETE: ',html_select("on_delete",array(-1=>"")+explode("|",$ee),$I["on_delete"]),' ON UPDATE: ',html_select("on_update",array(-1=>"")+explode("|",$ee),$I["on_update"]),'<p>
<input type="submit" value="Save">
<noscript><p><input type="submit" name="add" value="Add column"></noscript>
';}if($A!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$I=$_POST;if($_POST&&!$k){$A=trim($I["name"]);$wa=" AS\n$I[select]";$y=ME."table=".urlencode($A);$_='View has been altered.';if(!$_POST["drop"]&&$a==$A&&$u!="sqlite")query_redirect(($u=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($A).$wa,$y,$_);else{$eg=$A."_adminer_".uniqid();drop_create("DROP VIEW ".table($a),"CREATE VIEW ".table($A).$wa,"DROP VIEW ".table($A),"CREATE VIEW ".table($eg).$wa,"DROP VIEW ".table($eg),($_POST["drop"]?substr(ME,0,-1):$y),'View has been dropped.',$_,'View has been created.',$a,$A);}}if(!$_POST&&$a!=""){$I=view($a);$I["name"]=$a;if(!$k)$k=$g->error;}page_header(($a!=""?'Alter view':'Create view'),$k,array("table"=>$a),$a);echo'
<form action="" method="post">
<p>Name: <input name="name" value="',h($I["name"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("select",$I["select"]);echo'<p>
<input type="submit" value="Save">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$ad=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Lf=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$I=$_POST;if($_POST&&!$k){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),'Event has been dropped.');elseif(in_array($I["INTERVAL_FIELD"],$ad)&&isset($Lf[$I["STATUS"]])){$uf="\nON SCHEDULE ".($I["INTERVAL_VALUE"]?"EVERY ".q($I["INTERVAL_VALUE"])." $I[INTERVAL_FIELD]".($I["STARTS"]?" STARTS ".q($I["STARTS"]):"").($I["ENDS"]?" ENDS ".q($I["ENDS"]):""):"AT ".q($I["STARTS"]))." ON COMPLETION".($I["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?'Event has been altered.':'Event has been created.'),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$uf.($aa!=$I["EVENT_NAME"]?"\nRENAME TO ".idf_escape($I["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($I["EVENT_NAME"]).$uf)."\n".$Lf[$I["STATUS"]]." COMMENT ".q($I["EVENT_COMMENT"]).rtrim(" DO\n$I[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?'Alter event'.": ".h($aa):'Create event'),$k);if(!$I&&$aa!=""){$J=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$I=reset($J);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Name<td><input name="EVENT_NAME" value="',h($I["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">Start<td><input name="STARTS" value="',h("$I[EXECUTE_AT]$I[STARTS]"),'">
<tr><th title="datetime">End<td><input name="ENDS" value="',h($I["ENDS"]),'">
<tr><th>Every<td><input type="number" name="INTERVAL_VALUE" value="',h($I["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$ad,$I["INTERVAL_FIELD"]),'<tr><th>Status<td>',html_select("STATUS",$Lf,$I["STATUS"]),'<tr><th>Comment<td><input name="EVENT_COMMENT" value="',h($I["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$I["ON_COMPLETION"]=="PRESERVE",'On completion preserve'),'</table>
<p>';textarea("EVENT_DEFINITION",$I["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="Save">
';if($aa!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$pf=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$I=$_POST;$I["fields"]=(array)$I["fields"];if($_POST&&!process_fields($I["fields"])&&!$k){$eg="$I[name]_adminer_".uniqid();drop_create("DROP $pf ".idf_escape($da),create_routine($pf,$I),"DROP $pf ".idf_escape($I["name"]),create_routine($pf,array("name"=>$eg)+$I),"DROP $pf ".idf_escape($eg),substr(ME,0,-1),'Routine has been dropped.','Routine has been altered.','Routine has been created.',$da,$I["name"]);}page_header(($da!=""?(isset($_GET["function"])?'Alter function':'Alter procedure').": ".h($da):(isset($_GET["function"])?'Create function':'Create procedure')),$k);if(!$_POST&&$da!=""){$I=routine($da,$pf);$I["name"]=$da;}$Wa=get_vals("SHOW CHARACTER SET");sort($Wa);$qf=routine_languages();echo'
<form action="" method="post" id="form">
<p>Name: <input name="name" value="',h($I["name"]),'" maxlength="64" autocapitalize="off">
',($qf?'Language'.": ".html_select("language",$qf,$I["language"]):""),'<table cellspacing="0" class="nowrap">
';edit_fields($I["fields"],$Wa,$pf);if(isset($_GET["function"])){echo"<tr><td>".'Return type';edit_type("returns",$I["returns"],$Wa);}echo'</table>
<p>';textarea("definition",$I["definition"]);echo'<p>
<input type="submit" value="Save">
';if($da!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$I=$_POST;if($_POST&&!$k){$x=substr(ME,0,-1);$A=trim($I["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$x,'Sequence has been dropped.');elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($A),$x,'Sequence has been created.');elseif($fa!=$A)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($A),$x,'Sequence has been altered.');else
redirect($x);}page_header($fa!=""?'Alter sequence'.": ".h($fa):'Create sequence',$k);if(!$I)$I["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($I["name"]),'" autocapitalize="off">
<input type="submit" value="Save">
';if($fa!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$I=$_POST;if($_POST&&!$k){$x=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$x,'Type has been dropped.');else
query_redirect("CREATE TYPE ".idf_escape(trim($I["name"]))." $I[as]",$x,'Type has been created.');}page_header($ga!=""?'Alter type'.": ".h($ga):'Create type',$k);if(!$I)$I["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";else{echo"<input name='name' value='".h($I['name'])."' autocapitalize='off'>\n";textarea("as",$I["as"]);echo"<p><input type='submit' value='".'Save'."'>\n";}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$A=$_GET["name"];$yg=trigger_options();$wg=array("INSERT","UPDATE","DELETE");$I=(array)trigger($A)+array("Trigger"=>$a."_bi");if($_POST){if(!$k&&in_array($_POST["Timing"],$yg["Timing"])&&in_array($_POST["Event"],$wg)&&in_array($_POST["Type"],$yg["Type"])){$de=" ON ".table($a);$Fb="DROP TRIGGER ".idf_escape($A).($u=="pgsql"?$de:"");$y=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($Fb,$y,'Trigger has been dropped.');else{if($A!="")queries($Fb);queries_redirect($y,($A!=""?'Trigger has been altered.':'Trigger has been created.'),queries(create_trigger($de,$_POST)));if($A!="")queries(create_trigger($de,$I+array("Type"=>reset($yg["Type"]))));}}$I=$_POST;}page_header(($A!=""?'Alter trigger'.": ".h($A):'Create trigger'),$k,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Time<td>',html_select("Timing",$yg["Timing"],$I["Timing"],"if (/^".preg_quote($a,"/")."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".js_escape($a)."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>Event<td>',html_select("Event",$wg,$I["Event"],"this.form['Timing'].onchange();"),'<tr><th>Type<td>',html_select("Type",$yg["Type"],$I["Type"]),'</table>
<p>Name: <input name="Trigger" value="',h($I["Trigger"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("Statement",$I["Statement"]);echo'<p>
<input type="submit" value="Save">
';if($A!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$Se=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$I){foreach(explode(",",($I["Privilege"]=="Grant option"?"":$I["Context"]))as$gb)$Se[$gb][$I["Privilege"]]=$I["Comment"];}$Se["Server Admin"]+=$Se["File access on server"];$Se["Databases"]["Create routine"]=$Se["Procedures"]["Create routine"];unset($Se["Procedures"]["Create routine"]);$Se["Columns"]=array();foreach(array("Select","Insert","Update","References")as$W)$Se["Columns"][$W]=$Se["Tables"][$W];unset($Se["Server Admin"]["Usage"]);foreach($Se["Tables"]as$v=>$W)unset($Se["Databases"][$v]);$Sd=array();if($_POST){foreach($_POST["objects"]as$v=>$W)$Sd[$W]=(array)$Sd[$W]+(array)$_POST["grants"][$v];}$Ec=array();$be="";if(isset($_GET["host"])&&($G=$g->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($I=$G->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$I[0],$z)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$z[1],$_d,PREG_SET_ORDER)){foreach($_d
as$W){if($W[1]!="USAGE")$Ec["$z[2]$W[2]"][$W[1]]=true;if(ereg(' WITH GRANT OPTION',$I[0]))$Ec["$z[2]$W[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$I[0],$z))$be=$z[1];}}if($_POST&&!$k){$ce=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $ce",ME."privileges=",'User has been dropped.');else{$Ud=q($_POST["user"])."@".q($_POST["host"]);$De=$_POST["pass"];if($De!=''&&!$_POST["hashed"]){$De=$g->result("SELECT PASSWORD(".q($De).")");$k=!$De;}$lb=false;if(!$k){if($ce!=$Ud){$lb=queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Ud IDENTIFIED BY PASSWORD ".q($De));$k=!$lb;}elseif($De!=$be)queries("SET PASSWORD FOR $Ud = ".q($De));}if(!$k){$mf=array();foreach($Sd
as$Xd=>$Dc){if(isset($_GET["grant"]))$Dc=array_filter($Dc);$Dc=array_keys($Dc);if(isset($_GET["grant"]))$mf=array_diff(array_keys(array_filter($Sd[$Xd],'strlen')),$Dc);elseif($ce==$Ud){$Zd=array_keys((array)$Ec[$Xd]);$mf=array_diff($Zd,$Dc);$Dc=array_diff($Dc,$Zd);unset($Ec[$Xd]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Xd,$z)&&(!grant("REVOKE",$mf,$z[2]," ON $z[1] FROM $Ud")||!grant("GRANT",$Dc,$z[2]," ON $z[1] TO $Ud"))){$k=true;break;}}}if(!$k&&isset($_GET["host"])){if($ce!=$Ud)queries("DROP USER $ce");elseif(!isset($_GET["grant"])){foreach($Ec
as$Xd=>$mf){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Xd,$z))grant("REVOKE",array_keys($mf),$z[2]," ON $z[1] FROM $Ud");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'User has been altered.':'User has been created.'),!$k);if($lb)$g->query("DROP USER $Ud");}}page_header((isset($_GET["host"])?'Username'.": ".h("$ha@$_GET[host]"):'Create user'),$k,array("privileges"=>array('','Privileges')));if($_POST){$I=$_POST;$Ec=$Sd;}else{$I=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$I["pass"]=$be;if($be!="")$I["hashed"]=true;$Ec[(DB==""||$Ec?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($I["host"]),'" autocapitalize="off">
<tr><th>Username<td><input name="user" maxlength="16" value="',h($I["user"]),'" autocapitalize="off">
<tr><th>Password<td><input name="pass" id="pass" value="',h($I["pass"]),'">
';if(!$I["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$I["hashed"],'Hashed',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/grant.html#priv_level' target='_blank' rel='noreferrer' class='help'>".'Privileges'."</a>";$p=0;foreach($Ec
as$Xd=>$Dc){echo'<th>'.($Xd!="*.*"?"<input name='objects[$p]' value='".h($Xd)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$p]' value='*.*' size='10'>*.*");$p++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Database',"Tables"=>'Table',"Columns"=>'Column',"Procedures"=>'Routine',)as$gb=>$xb){foreach((array)$Se[$gb]as$Re=>$ab){echo"<tr".odd()."><td".($xb?">$xb<td":" colspan='2'").' lang="en" title="'.h($ab).'">'.h($Re);$p=0;foreach($Ec
as$Xd=>$Dc){$A="'grants[$p][".h(strtoupper($Re))."]'";$X=$Dc[strtoupper($Re)];if($gb=="Server Admin"&&$Xd!=(isset($Ec["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$A><option><option value='1'".($X?" selected":"").">".'Grant'."<option value='0'".($X=="0"?" selected":"").">".'Revoke'."</select>";else
echo"<td align='center'><label class='block'><input type='checkbox' name=$A value='1'".($X?" checked":"").($Re=="All privileges"?" id='grants-$p-all'":($Re=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$p-all');\""))."></label>";$p++;}}}echo"</table>\n",'<p>
<input type="submit" value="Save">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$k){$kd=0;foreach((array)$_POST["kill"]as$W){if(queries("KILL ".(+$W)))$kd++;}queries_redirect(ME."processlist=",lang(array('%d process has been killed.','%d processes have been killed.'),$kd),$kd||!$_POST["kill"]);}page_header('Process list',$k);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$p=-1;foreach(process_list()as$p=>$I){if(!$p){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($I
as$v=>$W)echo"<th>".($u=="sql"?"<a href='http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/show-processlist.html#processlist_".strtolower($v)."' target='_blank' rel='noreferrer' class='help'>$v</a>":$v);echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$I["Id"],0):"");foreach($I
as$v=>$W)echo"<td>".(($u=="sql"&&$v=="Info"&&ereg("Query|Killed",$I["Command"])&&$W!="")||($u=="pgsql"&&$v=="current_query"&&$W!="<IDLE>")||($u=="oracle"&&$v=="sql_text"&&$W!="")?"<code class='jush-$u'>".shorten_utf8($W,100,"</code>").' <a href="'.h(ME.($I["db"]!=""?"db=".urlencode($I["db"])."&":"")."sql=".urlencode($W)).'">'.'Clone'.'</a>':nbsp($W));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($p+1)."/".sprintf('%d in total',$g->result("SELECT @@max_connections")),"<p><input type='submit' value='".'Kill'."'>\n";}echo'<input type="hidden" name="token" value="',$R,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$P=table_status1($a);$t=indexes($a);$m=fields($a);$vc=column_foreign_keys($a);$Yd="";if($P["Oid"]){$Yd=($u=="sqlite"?"rowid":"oid");$t[]=array("type"=>"PRIMARY","columns"=>array($Yd));}parse_str($_COOKIE["adminer_import"],$qa);$nf=array();$f=array();$hg=null;foreach($m
as$v=>$l){$A=$b->fieldName($l);if(isset($l["privileges"]["select"])&&$A!=""){$f[$v]=html_entity_decode(strip_tags($A),ENT_QUOTES);if(is_shortable($l))$hg=$b->selectLengthProcess();}$nf+=$l["privileges"];}list($K,$Fc)=$b->selectColumnsProcess($f,$t);$bd=count($Fc)<count($K);$Z=$b->selectSearchProcess($m,$t);$me=$b->selectOrderProcess($m,$t);$w=$b->selectLimitProcess();$_c=($K?implode(", ",$K):"*".($Yd?", $Yd":"")).convert_fields($f,$m,$K)."\nFROM ".table($a);$Gc=($Fc&&$bd?"\nGROUP BY ".implode(", ",$Fc):"").($me?"\nORDER BY ".implode(", ",$me):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Eg=>$I){$wa=convert_field($m[key($I)]);echo$g->result("SELECT".limit($wa?$wa:idf_escape(key($I))." FROM ".table($a)," WHERE ".where_check($Eg,$m).($Z?" AND ".implode(" AND ",$Z):"").($me?" ORDER BY ".implode(", ",$me):""),1));}exit;}if($_POST&&!$k){$Wg=$Z;if(is_array($_POST["check"]))$Wg[]="((".implode(") OR (",array_map('where_check',$_POST["check"]))."))";$Wg=($Wg?"\nWHERE ".implode(" AND ",$Wg):"");$Ne=$Gg=null;foreach($t
as$s){if($s["type"]=="PRIMARY"){$Ne=array_flip($s["columns"]);$Gg=($K?$Ne:array());break;}}foreach((array)$Gg
as$v=>$W){if(in_array(idf_escape($v),$K))unset($Gg[$v]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Gg===array())$F="SELECT $_c$Wg$Gc";else{$Cg=array();foreach($_POST["check"]as$W)$Cg[]="(SELECT".limit($_c,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($W,$m).$Gc,1).")";$F=implode(" UNION ALL ",$Cg);}$b->dumpData($a,"table",$F);exit;}if(!$b->selectEmailProcess($Z,$vc)){if($_POST["save"]||$_POST["delete"]){$G=true;$ra=0;$F=table($a);$M=array();if(!$_POST["delete"]){foreach($f
as$A=>$W){$W=process_input($m[$A]);if($W!==null){if($_POST["clone"])$M[idf_escape($A)]=($W!==false?$W:idf_escape($A));elseif($W!==false)$M[]=idf_escape($A)." = $W";}}$F.=($_POST["clone"]?" (".implode(", ",array_keys($M)).")\nSELECT ".implode(", ",$M)."\nFROM ".table($a):" SET\n".implode(",\n",$M));}if($_POST["delete"]||$M){$Ya="UPDATE";if($_POST["delete"]){$Ya="DELETE";$F="FROM $F";}if($_POST["clone"]){$Ya="INSERT";$F="INTO $F";}if($_POST["all"]||($Gg===array()&&is_array($_POST["check"]))||$bd){$G=queries("$Ya $F$Wg");$ra=$g->affected_rows;}else{foreach((array)$_POST["check"]as$W){$G=queries($Ya.limit1($F,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($W,$m)));if(!$G)break;$ra+=$g->affected_rows;}}}$_=lang(array('%d item has been affected.','%d items have been affected.'),$ra);if($_POST["clone"]&&$G&&$ra==1){$od=last_id();if($od)$_=sprintf('Item%s has been inserted.'," $od");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$_,$G);}elseif(!$_POST["import"]){if(!$_POST["val"])$k='Ctrl+click on a value to modify it.';else{$G=true;$ra=0;foreach($_POST["val"]as$Eg=>$I){$M=array();foreach($I
as$v=>$W){$v=bracket_escape($v,1);$M[]=idf_escape($v)." = ".(ereg('char|text',$m[$v]["type"])||$W!=""?$b->processInput($m[$v],$W):"NULL");}$F=table($a)." SET ".implode(", ",$M);$Vg=" WHERE ".where_check($Eg,$m).($Z?" AND ".implode(" AND ",$Z):"");$G=queries("UPDATE".($bd||$Gg===array()?" $F$Vg":limit1($F,$Vg)));if(!$G)break;$ra+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$ra),$G);}}elseif(!is_string($oc=get_file("csv_file",true)))$k=upload_error($oc);elseif(!preg_match('~~u',$oc))$k='File must be in UTF-8 encoding.';else{cookie("adminer_import","output=".urlencode($qa["output"])."&format=".urlencode($_POST["separator"]));$G=true;$Xa=array_keys($m);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$oc,$_d);$ra=count($_d[0]);begin();$_f=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($_d[0]as$v=>$W){preg_match_all("~((?>\"[^\"]*\")+|[^$_f]*)$_f~",$W.$_f,$Ad);if(!$v&&!array_diff($Ad[1],$Xa)){$Xa=$Ad[1];$ra--;}else{$M=array();foreach($Ad[1]as$p=>$Ua)$M[idf_escape($Xa[$p])]=($Ua==""&&$m[$Xa[$p]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ua))));$G=insert_update($a,$M,$Ne);if(!$G)break;}}if($G)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$ra),$G);queries("ROLLBACK");}}}$Vf=$b->tableName($P);if(is_ajax())ob_start();page_header('Select'.": $Vf",$k);$M=null;if(isset($nf["insert"])){$M="";foreach((array)$_GET["where"]as$W){if(count($vc[$W["col"]])==1&&($W["op"]=="="||(!$W["op"]&&!ereg('[_%]',$W["val"]))))$M.="&set".urlencode("[".bracket_escape($W["col"])."]")."=".urlencode($W["val"]);}}$b->selectLinks($P,$M);if(!$f)echo"<p class='error'>".'Unable to select the table'.($m?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($K,$f);$b->selectSearchPrint($Z,$f,$t);$b->selectOrderPrint($me,$f,$t);$b->selectLimitPrint($w);$b->selectLengthPrint($hg);$b->selectActionPrint($t);echo"</form>\n";$C=$_GET["page"];if($C=="last"){$yc=$g->result("SELECT COUNT(*) FROM ".table($a).($Z?" WHERE ".implode(" AND ",$Z):""));$C=floor(max(0,$yc-1)/$w);}$F=$b->selectQueryBuild($K,$Z,$Fc,$me,$w,$C);if(!$F)$F="SELECT".limit((+$w&&$Fc&&$bd&&$u=="sql"?"SQL_CALC_FOUND_ROWS ":"").$_c,($Z?"\nWHERE ".implode(" AND ",$Z):"").$Gc,($w!=""?+$w:null),($C?$w*$C:0),"\n");echo$b->selectQuery($F);$G=$g->query($F);if(!$G)echo"<p class='error'>".error()."\n";else{if($u=="mssql"&&$C)$G->seek($w*$C);$Qb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$J=array();while($I=$G->fetch_assoc()){if($C&&$u=="oracle")unset($I["RNUM"]);$J[]=$I;}if($_GET["page"]!="last")$yc=(+$w&&$Fc&&$bd?($u=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($F) x")):count($J));if(!$J)echo"<p class='message'>".'No rows.'."\n";else{$Da=$b->backwardKeys($a,$Vf);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Fc&&$K?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'edit'."</a>");$Rd=array();$Cc=array();reset($K);$Ye=1;foreach($J[0]as$v=>$W){if($v!=$Yd){$W=$_GET["columns"][key($K)];$l=$m[$K?($W?$W["col"]:current($K)):$v];$A=($l?$b->fieldName($l,$Ye):"*");if($A!=""){$Ye++;$Rd[$v]=$A;$e=idf_escape($v);$Nc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($v);$xb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($Nc.($me[0]==$e||$me[0]==$v||(!$me&&$bd&&$Fc[0]==$e)?$xb:'')).'">';echo(!$K||$W?apply_sql_function($W["fun"],$A):h(current($K)))."</a>";echo"<span class='column hidden'>","<a href='".h($Nc.$xb)."' title='".'descending'."' class='text'> ‚Üì</a>";if(!$W["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($v)).'\'); return false;" title="'.'Search'.'" class="text jsonly"> =</a>';echo"</span>";}$Cc[$v]=$W["fun"];next($K);}}$ud=array();if($_GET["modify"]){foreach($J
as$I){foreach($I
as$v=>$W)$ud[$v]=max($ud[$v],min(40,strlen(utf8_decode($W))));}}echo($Da?"<th>".'Relations':"")."</thead>\n";if(is_ajax()){if($w%2==1&&$C%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($J,$vc)as$Qd=>$I){$Dg=unique_array($J[$Qd],$t);if(!$Dg){$Dg=array();foreach($J[$Qd]as$v=>$W){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$v))$Dg[$v]=$W;}}$Eg="";foreach($Dg
as$v=>$W){if(strlen($W)>64){$v="MD5(".(strpos($v,'(')?$v:idf_escape($v)).")";$W=md5($W);}$Eg.="&".($W!==null?urlencode("where[".bracket_escape($v)."]")."=".urlencode($W):"null%5B%5D=".urlencode($v));}echo"<tr".odd().">".(!$Fc&&$K?"":"<td>".checkbox("check[]",substr($Eg,1),in_array(substr($Eg,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($bd||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Eg)."'>".'edit'."</a>"));foreach($I
as$v=>$W){if(isset($Rd[$v])){$l=$m[$v];if($W!=""&&(!isset($Qb[$v])||$Qb[$v]!=""))$Qb[$v]=(is_mail($W)?$Rd[$v]:"");$x="";$W=$b->editVal($W,$l);if($W!==null){if(ereg('blob|bytea|raw|file',$l["type"])&&$W!="")$x=ME.'download='.urlencode($a).'&field='.urlencode($v).$Eg;if($W==="")$W="&nbsp;";elseif($hg!=""&&is_shortable($l))$W=shorten_utf8($W,max(0,+$hg));else$W=h($W);if(!$x){foreach((array)$vc[$v]as$n){if(count($vc[$v])==1||end($n["source"])==$v){$x="";foreach($n["source"]as$p=>$Ff)$x.=where_link($p,$n["target"][$p],$J[$Qd][$Ff]);$x=($n["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($n["db"]),ME):ME).'select='.urlencode($n["table"]).$x;if(count($n["source"])==1)break;}}}if($v=="COUNT(*)"){$x=ME."select=".urlencode($a);$p=0;foreach((array)$_GET["where"]as$V){if(!array_key_exists($V["col"],$Dg))$x.=where_link($p++,$V["col"],$V["val"],$V["op"]);}foreach($Dg
as$gd=>$V)$x.=where_link($p++,$gd,$V);}}if(!$x&&($x=$b->selectLink($I[$v],$l))===null){if(is_mail($I[$v]))$x="mailto:$I[$v]";if($Ve=is_url($I[$v]))$x=($Ve=="http"&&$ba?$I[$v]:"$Ve://www.adminer.org/redirect/?url=".urlencode($I[$v]));}$q=h("val[$Eg][".bracket_escape($v)."]");$X=$_POST["val"][$Eg][bracket_escape($v)];$Ic=h($X!==null?$X:$I[$v]);$yd=strpos($W,"<i>...</i>");$Mb=is_utf8($W)&&$J[$Qd][$v]==$I[$v]&&!$Cc[$v];$gg=ereg('text|lob',$l["type"]);echo(($_GET["modify"]&&$Mb)||$X!==null?"<td>".($gg?"<textarea name='$q' cols='30' rows='".(substr_count($I[$v],"\n")+1)."'>$Ic</textarea>":"<input name='$q' value='$Ic' size='$ud[$v]'>"):"<td id='$q' onclick=\"selectClick(this, event, ".($yd?2:($gg?1:0)).($Mb?"":", '".h('Use edit link to modify this value.')."'").");\">".$b->selectVal($W,$x,$l));}}if($Da)echo"<td>";$b->backwardKeysPrint($Da,$J[$Qd]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n",(!$Fc&&$K?"":"<script type='text/javascript'>tableCheck();</script>\n");}if(($J||$C)&&!is_ajax()){$ac=true;if($_GET["page"]!="last"&&+$w&&!$bd&&($yc>=$w||$C)){$yc=found_rows($P,$Z);if($yc<max(1e4,2*($C+1)*$w))$yc=reset(slow_query("SELECT COUNT(*) FROM ".table($a).($Z?" WHERE ".implode(" AND ",$Z):"")));else$ac=false;}if(+$w&&($yc===false||$yc>$w||$C)){echo"<p class='pages'>";$Cd=($yc===false?$C+(count($J)>=$w?2:1):floor(($yc-1)/$w));echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Page'."', '".($C+1)."'), event); return false;\">".'Page'."</a>:",pagination(0,$C).($C>5?" ...":"");for($p=max(1,$C-4);$p<min($Cd,$C+5);$p++)echo
pagination($p,$C);if($Cd>0){echo($C+5<$Cd?" ...":""),($ac&&$yc!==false?pagination($Cd,$C):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$Cd'>".'last'."</a>");}echo(($yc===false?count($J)+1:$yc-$C*$w)>$w?' <a href="'.h(remove_from_uri("page")."&page=".($C+1)).'" onclick="return !selectLoadMore(this, '.(+$w).', \''.'Loading'.'\');">'.'Load more data'.'</a>':'');}echo"<p>\n",($yc!==false?"(".($ac?"":"~ ").lang(array('%d row','%d rows'),$yc).") ":""),checkbox("all",1,0,'whole result')."\n";if($b->selectCommandPrint()){echo'<fieldset><legend>Edit</legend><div>
<input type="submit" value="Save"',($_GET["modify"]?'':' title="'.'Ctrl+click on a value to modify it.'.'" class="jsonly"');?>>
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure? (' + (this.form['all'].checked ? <?php echo$yc,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$wc=$b->dumpFormat();foreach((array)$_GET["columns"]as$e){if($e["fun"]){unset($wc['sql']);break;}}if($wc){print_fieldset("export",'Export');$ve=$b->dumpOutput();echo($ve?html_select("output",$ve,$qa["output"])." ":""),html_select("format",$wc,$qa["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}}if($b->selectImportPrint()){print_fieldset("import",'Import',!$J);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$qa["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($Qb,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$R'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$Kf=isset($_GET["status"]);page_header($Kf?'Status':'Variables');$Qg=($Kf?show_status():show_variables());if(!$Qg)echo"<p class='message'>".'No rows.'."\n";else{echo"<table cellspacing='0'>\n";foreach($Qg
as$v=>$W){echo"<tr>","<th><code class='jush-".$u.($Kf?"status":"set")."'>".h($v)."</code>","<td>".nbsp($W);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Sf=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$A=>$P){$q=js_escape($A);json_row("Comment-$q",nbsp($P["Comment"]));if(!is_view($P)){foreach(array("Engine","Collation")as$v)json_row("$v-$q",nbsp($P[$v]));foreach($Sf+array("Auto_increment"=>0,"Rows"=>0)as$v=>$W){if($P[$v]!=""){$W=number_format($P[$v],0,'.',',');json_row("$v-$q",($v=="Rows"&&$W&&$P["Engine"]==($Hf=="pgsql"?"table":"InnoDB")?"~ $W":$W));if(isset($Sf[$v]))$Sf[$v]+=($P["Engine"]!="InnoDB"||$v!="Data_free"?$P[$v]:0);}elseif(array_key_exists($v,$P))json_row("$v-$q");}}}foreach($Sf
as$v=>$W)json_row("sum-$v",number_format($W,0,'.',','));json_row("");}elseif($_GET["script"]=="kill")$g->query("KILL ".(+$_POST["kill"]));else{foreach(count_tables($b->databases())as$j=>$W)json_row("tables-".js_escape($j),$W);json_row("");}exit;}else{$bg=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($bg&&!$k&&!$_POST["search"]){$G=true;$_="";if($u=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$G=truncate_tables($_POST["tables"]);$_='Tables have been truncated.';}elseif($_POST["move"]){$G=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$_='Tables have been moved.';}elseif($_POST["copy"]){$G=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$_='Tables have been copied.';}elseif($_POST["drop"]){if($_POST["views"])$G=drop_views($_POST["views"]);if($G&&$_POST["tables"])$G=drop_tables($_POST["tables"]);$_='Tables have been dropped.';}elseif($u!="sql"){$G=($u=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$_='Tables have been optimized.';}elseif(!$_POST["tables"])$_='No tables.';elseif($G=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($I=$G->fetch_assoc())$_.="<b>".h($I["Table"])."</b>: ".h($I["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$_,$G);}page_header(($_GET["ns"]==""?'Database'.": ".h(DB):'Schema'.": ".h($_GET["ns"])),$k,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".'Tables and views'."</h3>\n";$ag=tables_list();if(!$ag)echo"<p class='message'>".'No tables.'."\n";else{echo"<form action='' method='post'>\n","<p>".'Search data in tables'.": <input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Search'."'>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);">','<th>'.'Table','<td>'.'Engine','<td>'.'Collation','<td>'.'Data Length','<td>'.'Index Length','<td>'.'Data Free','<td>'.'Auto Increment','<td>'.'Rows',(support("comment")?'<td>'.'Comment':''),"</thead>\n";foreach($ag
as$A=>$S){$Sg=($S!==null&&!eregi("table",$S));echo'<tr'.odd().'><td>'.checkbox(($Sg?"views[]":"tables[]"),$A,in_array($A,$bg,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($A).'" title="'.'Show structure'.'">'.h($A).'</a>';if($Sg){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($A).'" title="'.'Alter view'.'">'.'View'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($A).'" title="'.'Select data'.'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",'Alter table'),"Index_length"=>array("indexes",'Alter indexes'),"Data_free"=>array("edit",'New item'),"Auto_increment"=>array("auto_increment=1&create",'Alter table'),"Rows"=>array("select",'Select data'),)as$v=>$x)echo($x?"<td align='right'><a href='".h(ME."$x[0]=").urlencode($A)."' id='$v-".h($A)."' title='$x[1]'>?</a>":"<td id='$v-".h($A)."'>&nbsp;");}echo(support("comment")?"<td id='Comment-".h($A)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d in total',count($ag)),"<td>".nbsp($u=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$v)echo"<td align='right' id='sum-$v'>&nbsp;";echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n";if(!information_schema(DB)){echo"<p>".(ereg('^(sql|sqlite|pgsql)$',$u)?($u!="sqlite"?"<input type='submit' value='".'Analyze'."'> ":"")."<input type='submit' name='optimize' value='".'Optimize'."'> ":"").($u=="sql"?"<input type='submit' name='check' value='".'Check'."'> <input type='submit' name='repair' value='".'Repair'."'> ":"")."<input type='submit' name='truncate' value='".'Truncate'."'".confirm("formChecked(this, /tables/)")."> <input type='submit' name='drop' value='".'Drop'."'".confirm("formChecked(this, /tables|views/)").">\n";$i=(support("scheme")?schemas():$b->databases());if(count($i)!=1&&$u!="sqlite"){$j=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Move to other database'.": ",($i?html_select("target",$i,$j):'<input name="target" value="'.h($j).'" autocapitalize="off">')," <input type='submit' name='move' value='".'Move'."'>",(support("copy")?" <input type='submit' name='copy' value='".'Copy'."'>":""),"\n";}echo"<input type='hidden' name='token' value='$R'>\n";}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.'Create table'."</a>\n";if(support("view"))echo'<a href="'.h(ME).'view=">'.'Create view'."</a>\n";if(support("routine")){echo"<h3 id='routines'>".'Routines'."</h3>\n";$rf=routines();if($rf){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Name'.'<td>'.'Type'.'<td>'.'Return type'."<td>&nbsp;</thead>\n";odd('');foreach($rf
as$I){echo'<tr'.odd().'>','<th><a href="'.h(ME).($I["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($I["ROUTINE_NAME"]).'">'.h($I["ROUTINE_NAME"]).'</a>','<td>'.h($I["ROUTINE_TYPE"]),'<td>'.h($I["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($I["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($I["ROUTINE_NAME"]).'">'.'Alter'."</a>";}echo"</table>\n";}echo'<p>'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.'Create procedure'.'</a> ':'').'<a href="'.h(ME).'function=">'.'Create function'."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".'Sequences'."</h3>\n";$Af=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema()");if($Af){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($Af
as$W)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($W)."'>".h($W)."</a>\n";echo"</table>\n";}echo"<p><a href='".h(ME)."sequence='>".'Create sequence'."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".'User types'."</h3>\n";$Mg=types();if($Mg){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($Mg
as$W)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($W)."'>".h($W)."</a>\n";echo"</table>\n";}echo"<p><a href='".h(ME)."type='>".'Create type'."</a>\n";}if(support("event")){echo"<h3 id='events'>".'Events'."</h3>\n";$J=get_rows("SHOW EVENTS");if($J){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."<td>".'Schedule'."<td>".'Start'."<td>".'End'."<td></thead>\n";foreach($J
as$I){echo"<tr>","<th>".h($I["Name"]),"<td>".($I["Execute at"]?'At given time'."<td>".$I["Execute at"]:'Every'." ".$I["Interval value"]." ".$I["Interval field"]."<td>$I[Starts]"),"<td>$I[Ends]",'<td><a href="'.h(ME).'event='.urlencode($I["Name"]).'">'.'Alter'.'</a>';}echo"</table>\n";$Zb=$g->result("SELECT @@event_scheduler");if($Zb&&$Zb!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($Zb)."\n";}echo'<p><a href="'.h(ME).'event=">'.'Create event'."</a>\n";}if($ag)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();