<div class="body">
	
<div class="row"> 
<div class="col-md-8"><h1 style="text-align: center;">Шифр Цезаря</h1></div>

<div class="article">
	<div class="article_body">

	<p>
	<strong>Шифр Цезаря</strong> один из наиболее древнейших известных шифров. Схема шифрования очень проста - используется сдвиг буквы алфавита на фиксированное число позиций. Используемое преобразование обычно обозначают как ROTN, где N - сдвиг, ROT - сокращение от слова ROTATE, в данном случае "циклический сдвиг". </p>
	<p>Алфавит действительно зацикливается, то есть буквы в конце алфавита преобразуются в буквы начала алфавита. Например, обозначение ROT2 обозначает сдвиг на 2 позиции, то есть "а" превращается в "в", "б" в "г", и так далее, и в конце "ю" превращается в "а" а "я" - в "б". Число разных преобразований конечно и зависит от длины алфавита. Для русского языка возможно 32 разных преобразования (преобразования ROT0 и ROT33 сохраняют исходный текст, а дальше начинаются уже повторения). В связи с этим шифр является крайне слабым и исходный текст можно восстановить просто проверив все возможные преобразования.</p>
	<p>Калькулятор выдает таблицу всех возможных в шифре Цезаря преобразований введенного текста. Неалфавитные символы - знаки препинания, пробелы, цифры - не меняются.</p>



				<div class="shifr">
				<h1>Шифр</h1> 
					<div>
						<p>Входной текст:</p>
						<input type="text" id="message" size="30" value="В каит20-лучшие компьютеры страны">
						<p>На сколько символов смещать</p>
						<input type="text" id="shift" value="-3">
						<p>Результат</p>
					<div id="output"></div>

					<script type="text/javascript">
					(function(){

					"use strict";

					window.CeasarsCipher = function(input){	  
						var alphabet = "абвгдеёжзийклмнопрстуфхцчшщъыьэюя".toLowerCase(),
						  //The amount of shift. Will be defined in the future by the input value.
							shiftAmount,
						  //The variable that WILL store the shifted alphabet.
						  shiftedAlphabet = "",
						  //The string that WILL store the future output.
						  OUTPUT = "",
						  //The input string itself, that will be defined by the input value in the future.
						  STRING,
						  //Just the characters that are not part of the alphabet.
						  otherCharacters = '-=~\"\'#$%&*^:<>?/!{(|)}.1234567890\, '
					  //Then, we are checking the argument of the function. If this is an object, we will set out predefined variables
					  if(typeof input === "object"){
						shiftAmount = input.shift;
						STRING = input.msg.toLowerCase();
					  } else {
						//If an argument is not an object with stuff we need, drop the function
						return;
					  }
					  //Now, we make the whole magic here
					  if(typeof STRING === "string" || typeof (STRING+"") === "string"){
						//Now we define the shifted alphabet variable.
						//First we take last <shift> letters and put them in the beggining of the string
						shiftedAlphabet = alphabet.slice(shiftAmount);
						//Then, we put rest of the alphabet AFTER the SHIFTER_LETTERS
						shiftedAlphabet += alphabet.slice(0, shiftAmount);
						//Then, we add characters that are not part of the alphabet, and don't really suppose to be shifted. So when we add them to both alphabets, we will not shift the characters
						shiftedAlphabet += otherCharacters;
						alphabet += otherCharacters;
						
						//Then, we make the output
						for(var i = 0; i < STRING.length; i++){
						  //Take the index of the letter we want to replace
							var numberd = alphabet.indexOf( STRING[i] )
							
						  //And using the old index of the letter we take it from shifted alphabet and putting it into the OUTPUT
						  OUTPUT += shiftedAlphabet[numberd];
						}
					  } else {
						//IF STRING is not a STRING or it is not even present, we drop the function
						return;
					  };
					  
					  //RETURNING THE OUTPUT
					  return OUTPUT;
					  
					  //DONE =) XD
					};
					})();

					//Now just the calling stuff. You can check this out if you want to implement the same thing. Pretty EZ. I think you can understand it EZ without my comments =)

					document.getElementById("message").addEventListener("input", function(){
						var itsValue = this.value;
					  document.getElementById("output").textContent = CeasarsCipher({
						msg: itsValue,
						shift: document.getElementById("shift").value
					  });
					});
					document.getElementById("shift").addEventListener("keyup", function(){
						var itsValue = this.value;
					  document.getElementById("output").textContent = CeasarsCipher({
						msg: document.getElementById("message").value,
						shift: itsValue
					  })
					});

					document.getElementById("output").textContent = CeasarsCipher({
						msg: document.getElementById("message").value,
						shift: document.getElementById("shift").value
					  });
					</script>
					</div>
				

				</div>
	</div>
</div>

</div> 