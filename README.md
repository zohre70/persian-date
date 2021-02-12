# persian-date
در این کد دو تابع تعریف شده است که تاریخ را به عنوان ورودی می گیرد، مدت زمان مانده تا آن تاریخ یا مدت زمان گذشته شده از آن تاریخ را به فرمت زیر نمایش می دهد:

<p style="direction: rtl; text-align: right">"2 سال و 5 ماه و 6 روز و 12 دقیقه و 30 ثانیه مانده است"</p>

تابع time_diff یک تاریخ را به عنوان ورودی می گیرد و محاسبه می کند که چند سال یا ماه یا روز یا دقیقه یا ثانیه از آن گذشته یا تا آن تاریخ مانده است.

تابع age یک تاریخ را به عنوان ورودی می گیرد و سن آن را با سال و ماه نمایش می دهد.

<pre>
<code>
//مثال 
echo "<div style='direction: rtl; text-align: right;'>";
echo "<h3>مثالی از تابع &lrm;time_diff()&lrm;</h3><br>";

echo '2020-10-03 = ';
echo time_diff('2020-10-03')."<br>";
echo '1633219200 = ';
echo time_diff(1633219200, true)."<br>";
echo date('Y-m-d H:i')." = ";
echo time_diff(date('Y-m-d H:i'));

echo "<br>-------------------------------<br><br>";

echo "<h3>مثالی از تابع &lrm;age()&lrm;</h3><br>";
echo '2000-05-03 = ';
echo age('2000-05-03')."<br>";
</code>

</pre>

<a href="https://backendbaz.ir/codes/?code_id=55">کتابخانه ی کاربردی تاریخ در PHP</a>
