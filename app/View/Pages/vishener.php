<div class="body">


	<div>
	<h1 style="text-align: center;">Шифр Виженера</h1>
		<p>Шифр был предложен математиком Блезом де Инженером в XVI веке. Шифр Виженера является полиалфавитным, поскольку при шифровании текста используется несколько алфавитов.
		Другими словами, букве а исходного текста далеко не всегда соответствует буква d шифрованного текста, как это было в шифре Цезаря со сдвигом 3. </p>
		<p>Ключом этого шифра является не число, а ключевое слово. Предположим, вы хотите зашифровать исходный текст meet at midnight с. ключеиым словом vinegar. 
		Буквы ключевого слова выстраиваются параллельно с буквами исходного текста: <br>
			vine ga rvinegar<br>
			meet at midnight</p>
		<p>Отлично. V является 22-й буквой алфавита, а / — 9-й. Буквы п, e,g, а и г находятся соответственно на 14, 5, 7, 1 и 18 месте. 
		Таким образом, букна т исходного текста сдвигается на 22 позиции, первая е — на 9 позиций, вторая — на 14 и т. д. Получается следующий шифрованный текст:<br>
			hmrx gt ddlamrnhk</p>
		<p>Если задуматься, этот шифр представляет собой разновидность шифра Цезаря, у которого в разных позициях используются разные величины сдвигов.</p>
	</div>






<script type="text/javascript" src="http://mindhalls.ru/wp-includes/js/jquery/jquery.js?ver=1.12.4"></script><script type="text/javascript">try {
var AG_onLoad=function(func){if(document.readyState==="complete"||document.readyState==="interactive")func();else if(document.addEventListener)document.addEventListener("DOMContentLoaded",func);else if(document.attachEvent)document.attachEvent("DOMContentLoaded",func)};
var AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
var AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
var AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AG_removeParent = function(el, fn) { while (el && el.parentNode) { if (fn(el)) { el.parentNode.removeChild(el); return; } el = el.parentNode; } };
var AdFox_getCodeScript = function() {};
AG_onLoad(function() { AG_each('iframe[id^="AdFox_iframe_"]', function(el) { if (el && el.parentNode) { el.parentNode.removeChild(el); } }); });
try { Object.defineProperty(window, 'noAdsAtAll', { get: function() { return true; } }); } catch (ex) {}
navigator.getBattery = undefined;
(function() { window.Ya = window.Ya || {}; window.Ya.Metrika = function() { var noop = function() {}; this.addFileExtension = noop; this.extLink = noop; this.file = noop; this.hit = noop; this.notBounce = noop; this.params = noop; this.reachGoal = noop; this.replacePhones = noop; this.clickmap = noop; this.trackLinks = noop; }; })();
var _gaq = []; var _gat = { _getTracker: function() { return { _initData: function(){}, _trackPageview: function(){}, _trackEvent: function(){}, _setAllowLinker: function() {}, _setCustomVar: function() {} } }, _createTracker: function() { return this._getTracker(); }, _anonymizeIp: function() {} };
function urchinTracker() {};
var addthis = { init: function() {}, addEventListener: function() {}, button: function() {}, counter: function() {}, update: function() {}, toolbox: function() {}, layers: function() {} };
} catch (ex) { console.error('Error executing AG js: ' + ex); }</script>



	<div class="vishener">	
<h2><a href="#" id="show-encrypt">Зашифровать текст шифром Виженера</a><br></h2>
<h2><a href="#" id="show-decrypt">Расшифровать шифр Виженера</a><br></h2>
<div id="encrypt-div" style="display: block;">
<h2>Шифрование открытого текста методом Виженера</h2>
<p>Из текста пропадут все пробелы и некоторые спецсимволы.</p>
<form  name="ef">
		<input type="radio" name="loc" value="eng" checked="true"> <h3>Текст на английском языке<h3>
		<input type="radio" name="loc" value="rus"> <h3>Текст на русском языке<h3><br>
		<textarea name="etext" cols="45" rows="4" placeholder="Текст для шифрования..."></textarea><br>
		Ключевое слово для шифрования: <input type="text" name="ekey" size="20"><br>
		Используйте только символы алфавита<br>
		<input id="ebut" type="button" name="start" value="Зашифровать"><br>
	</form>
</div>
<div id="decrypt-div" style="display: none;">
<h2>Расшифровка шифра Виженера по ключу</h2>
<p>Спецсимволы не содержащиеся в алфавите будут пропущены.</p>
<form name="df" method="post">
		<input type="radio" name="loc" value="eng" checked="true"> <br> Шифр на английском языке<br>
		<input type="radio" name="loc" value="rus">Шифр на русском языке<br>
		<textarea name="dtext" cols="45" rows="4" placeholder="Текст для расшифровки..."></textarea><br>
		Ключевое слово для расшифровки: <input type="text" name="dkey" size="20"><br>
		Используйте только символы алфавита<br>
		<input id="dbut" type="button" name="start" value="Расшифровать"><br>
	</form>
</div>
<div id="result"><h2>Результат:</h2><p><strong>Язык:</strong> русский<br><strong>Ключ: </strong>попо<br><strong>Шифр:</strong>яэаэа</p></div>
<p><script type="text/javascript" src="http://mindhalls.ru/wp-content/themes/mindhalls/js/vigenere-code.js"></script></p>
	 </div> 

</div>
			

	

				
					  
		  	



