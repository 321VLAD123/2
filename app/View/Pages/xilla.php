<div class="body">
		<h1 style="text-align: center;">Шифр Хилла</h1>
		
		<p>Калькулятор позволяет зашифровать и расшифровать текст методом Хилла</p>
		<p>Шифр Хилла — полиграммный шифр подстановки, основанный на линейной алгебре. Лестер С. Хилл изобрел этот шифр в 1929. 
		Калькулятор ниже позволяет зашифровать и расшифровать текст методом Хилла. Подробности о шифре для интересующихся приведены под калькулятором.</p>
		
		<div class="fieldset ">
		<h1>Шифр Хилла</h1>
		<div>
		<span title="Все символы, подвергающиеся шифрованию, должны входить в алфавит">Алфавит</span>
		
		<input class="form-control text" type="text" value="абвгдеёжзийклмнопрстуфхцчшщъыьэюя., ?" id="dialogv58a483f318b38_alphabet" name="alphabet" 
		onchange=" dialoghandlerv58a483f318b38.onchanged('alphabet');" onkeypress="return dialoghandlerv58a483f318b38.onkeypressed('alphabet', event );"></div>
		
		<div class="form-group"><label class="control-label textarea" for="dialogv58a483f318b38_text">Текст:</label>
		<textarea class="form-control" id="dialogv58a483f318b38_text" name="text" onchange=" dialoghandlerv58a483f318b38.onchanged('text');" 
		onkeypress="return dialoghandlerv58a483f318b38.onkeypressed('text', event );" 
		onkeydown="return (typeof(dialoghandlerv58a483f318b38.onkeydown) != 'undefined' ? dialoghandlerv58a483f318b38.onkeydown('text', event ) : true);" rows="5" 
		cols="60">никогда еще штирлиц не был так близок к провалу</textarea>
		</div>
	<div class="form-group"><label class="control-label text" for="dialogv58a483f318b38_key">Ключ:</label>
	<input class="form-control text" type="text" value="кодовое слово же" id="dialogv58a483f318b38_key" name="key" 
	onchange=" dialoghandlerv58a483f318b38.onchanged('key');" onkeypress="return dialoghandlerv58a483f318b38.onkeypressed('key', event );">
	</div>
	
	<div id="dialogv58a483f318b38_errors"><script type="text/javascript">
		var dialogv58a483f318b38_errors_data={"key_invalid":"Неверный ключ. Длина ключа должна быть квадратом целого числа","key_wrong":"Неверный ключ. Ключ должен содержать только алфавитные символы","text_wrong":"Неверный текст. Текст должен содержать только алфавитные символы","NonSquare":"Матрица ключа не квадратная","Singular":"Матрица ключа вырождена. Попробуйте задать другой ключ.","key_bad":"Неверный ключ. Детерминант матрицы ключа не имеет обратного элемента по модулю"};
	</script></div>
	
	<div><label>Преобразование:</label><br>
	<label><input type="radio" id="dialogv58a483f318b38_method0" name="dialogv58a483f318b38_method" 
	onclick="dialoghandlerv58a483f318b38.onchanged('method');" onchange=" dialoghandlerv58a483f318b38.onchanged('method');" checked="checked" value="c">Зашифровать</label><br>
	<label><input type="radio" id="dialogv58a483f318b38_method1" name="dialogv58a483f318b38_method" onclick="dialoghandlerv58a483f318b38.onchanged('method');" 
	onchange=" dialoghandlerv58a483f318b38.onchanged('method');" value="d">Расшифровать</label>
	</div>

	<div>
		<a href="#">
		<span>Рассчитать</span></a>
		</div>

		<div>
		<span>Преобразованный текст:</span><br>
		<span>гчцящёуьыжвцадиж.ош?нй?яшылуч,ыыёц.вюукугыжщерфв</span></div>
</div>
	
		
		<h1 style="text-align: center;">Как работает шифр</h1>
		<p>Для начала символы используемого алфавита (в широком смысле этого слова, например, алфавит может включать в себя пробел и некоторые знаки пунктуации,
		как в калькуляторе выше) кодируются числами, то есть каждому символу алфавита сопоставляется некоторое число, например, порядковый номер.
		Выбирается матрица размера n x n, которая будет являться ключом шифра. Весь текст разбивается на блоки из из n букв, числовые значения которых рассматриваются 
		как вектор размерности n. Каждый вектор умножается на матрицу шифрования n × n. Результирующий блок (вектор) размерности n - соответствующий исходному блоку 
		зашифрованный текст. Операции сложения и умножения при этом выполняются в кольце вычетов по модулю m, где m - размерность алфавита. Очевидно, это делается для того, 
		чтобы значения результирующего блока тоже принадлежали исходному алфавиту.</p>
		<p>Ключ, в принципе, можно сразу задавать матрицей, но для удобства еще чаще задают кодовой фразой, числовое представление которой трансформируют в матрицу.
		Понятно, что для того, чтобы получить квадратную матрицу n x n, длина кодовой фразы должна являться квадратом целого числа, то есть, 4, 9, 16, 25, и т.д.</p>
		
		
		
			
		
</div>