<div class="body">

	<div class="shifr">
	<h1>Шифр Атбаш</h1>
	<p>Калькулятор позволяет зашифровать и расшифровать текст методом Атбаш</p>
	<p>Правило шифрования Атбаш состоит в замене n-й буквы алфавита буквой с номером m − n + 1, где m - число букв в алфавите. Пример для русского алфавита выглядит так:
	абвгдеёжзийклмнопрстуфхцчшщъыьэюя (исходный текст)
	яюэьыъщшчцхфутсрпонмлкйизжёедгвба (зашифрованный текст)</p>
	
	<div>
	<p>Входной текст:</p>
		<input id="source-text" type="text">
	<p>Результат</p>
	<input id="encoded-text" type="text">
	<script>
		var source = document.getElementById("source-text"),
			encoded = document.getElementById("encoded-text"),
			replacements = {
				"А": "Я",
				"Б": "Ю",
				"В": "Э",
				"Г": "Ь",
				"Д": "Ы",
				"Е": "Ъ",
				"Ё": "Щ",
				"Ж": "Ш",
				"З": "Ч",
				"И": "Ц",
				"Й": "Х",
				"К": "Ф",
				"Л": "У",
				"М": "Т",
				"Н": "С",
				"О": "Р",
				"П": "П",
				"Р": "О",
				"С": "Н",
				"Т": "М",
				"У": "Л",
				"Ф": "К",
				"Х": "Й",
				"Ц": "И",
				"Ч": "З",
				"Ш": "Ж",
				"Щ": "Ё",
				"Ъ": "Е",
				"Ы": "Д",
				"Ь": "Г",
				"Э": "В",
				"Ю": "Б",
				"Я": "А"
			};
		source.onkeyup = function encode() {
			encoded.value = source.value.replace(/[а-яА-ЯёЁ]/g, function (letter) {
				return replacements[letter.toUpperCase()];
			});
		};
	</script>
	</div>
	</div>
</div>