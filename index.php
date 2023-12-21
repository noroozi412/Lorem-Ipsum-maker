html
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>قالب ریسپانسیو</title>
  <style>
.ck-editor__editable {
  min-height: 300px;
}
    body {
      background-image: url('itachi-uchiha-naruto-black-background-minimal-art-amoled-3840x2160-4942.jpg');
      background-size: cover;
    }
    .container {
      margin-top: 100px;
    }
    #ckeditor {
      text-align: center;
    }
    .buttons {
      text-align: center;
      margin-top: 30px;
    }
  </style>
</head>
<body>
<center>
<h2>لورمی</h2
</center>
  <div class="container">

    <div class="row justify-content-center">

      <div class="col-md-6">

        <div class="buttons">
          <button class="btn btn-primary">خانه</button>
          <button class="btn btn-primary">تماس باما</button>
          <button class="btn btn-primary">درباره ما</button>
        </div>
</br>
<form action="index.php" method="post">
<div class="form-group">
          <select class="form-control"name="lang">
        <option value="fa" selected="fa" name="farsi">فارسی</option>
        <option value="eng" id="word" name="eng">انگلیسی</option>
        <option value="ara"  name="ara">عربی</option>
    </select>
        </div>
        <div class="form-group">
          
          <select class="form-control"name="type">
        <option value="characters" name="characters">حرف</option>
        <option value="word" id="word" name="word">کلمه</option>
        <option value="paragraphs" selected="selected" name="paragraphs">پاراگراف</option>
    </select>
        </div>
        <div class="form-group">
        <input class="form-control" id="n1" name="number-check" ><label id="lab-n1" for="n1"></label>
          
        </div>
        <div id="ckeditor">
          <textarea style="width: 450px;" dir="ltr" name="editor">
          <?php

$string = "This is a sample string";
//زبان عربی
if(isset($_POST['submit']) && $_POST['lang']=='ara')
{
    if(isset($_POST['number-check']) && $_POST['number-check'] <=10 ){
    if(isset($_POST['type'])){
        $type=$_POST['type'];
        if($type == "characters" )
        {
            $number=$_POST['number-check'];
            $string = "لوريم إيبسوم هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق ليتراسيت البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل ألدوس بايج مايكر والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.";
            for($i=0;$i<$number;$i++){
            $character= mb_substr($string, $i, 1, 'UTF-8');
            echo htmlspecialchars($character);
        }
        }
        elseif($type == "word" )
        {
            $number=$_POST['number-check'];
            $string = "لوريم إيبسوم هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق ليتراسيت البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل ألدوس بايج مايكر والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.";
            $words = explode(" ", $string); // تبدیل رشته به آرایه از کلمات
            for($i=0;$i<$number;$i++)
            {
         $word = $words[$i]; // دریافت کلمه پنجم
           echo htmlspecialchars("".$word." ");
        } // نمایش کلمه پنجم
        }
        elseif($type == "paragraphs" )
        {
            $number=$_POST['number-check'];
            $string = "لوريم إيبسوم هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق ليتراسيت البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل ألدوس بايج مايكر والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.";

            for($i=0;$i<$number;$i++){
            echo $string.'</br>';
            $dir='ltr';
            }
        }
    }}
    else
    {
        echo "* - عدد کمتر از 10 وارد کنید";
    }
}
//زبان انگلیسی
if(isset($_POST['submit']) && $_POST['lang']=='eng')
{
    if(isset($_POST['number-check']) && $_POST['number-check'] <=10 ){
    if(isset($_POST['type'])){
        $type=$_POST['type'];
        if($type == "characters" )
        {
            $number=$_POST['number-check'];
            $string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
            for($i=0;$i<$number;$i++){
            $character= mb_substr($string, $i, 1, 'UTF-8');
            echo htmlspecialchars($character);
        }
        }
        elseif($type == "word" )
        {
            $number=$_POST['number-check'];
            $string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
            $words = explode(" ", $string); // تبدیل رشته به آرایه از کلمات
            for($i=0;$i<$number;$i++)
            {
         $word = $words[$i]; // دریافت کلمه پنجم
           echo htmlspecialchars("".$word." ");
        } // نمایش کلمه پنجم
        }
        elseif($type == "paragraphs" )
        {
            $number=$_POST['number-check'];
            $string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

            for($i=0;$i<$number;$i++){
            echo $string.'</br>';
            $dir='ltr';
            }
        }
    }}
    else
    {
        echo "* - عدد کمتر از 10 وارد کنید";
    }
}

//زبان فارسی
if(isset($_POST['submit']) && $_POST['lang']=='fa')
{
    if(isset($_POST['number-check']) && $_POST['number-check'] <=10 ){
    if(isset($_POST['type'])){
        $type=$_POST['type'];
        if($type == "characters" )
        {
            $number=$_POST['number-check'];
            $string = "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.";
            for($i=0;$i<$number;$i++){
            $character= mb_substr($string, $i, 1, 'UTF-8');
            echo htmlspecialchars($character);
        }
        }
        elseif($type == "word" )
        {
            $number=$_POST['number-check'];
            $string = "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.";
            $words = explode(" ", $string); // تبدیل رشته به آرایه از کلمات
            for($i=0;$i<$number;$i++)
            {
         $word = $words[$i]; // دریافت کلمه پنجم
           echo htmlspecialchars("".$word." ");
        } // نمایش کلمه پنجم
        }
        elseif($type == "paragraphs" )
        {
            $number=$_POST['number-check'];
            $string = "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.";

            for($i=0;$i<$number;$i++){
            echo $string.'</br>';
            }
        }
    }}
    else
    {
        echo "* - عدد کمتر از 10 وارد کنید";
    }
} ?>
          </textarea>
        </div>
        <div class="text-center mt-4">
          <input type="hidden" name='dir' value="<?php echo $dir; ?>"></input>
          <button name="submit" type="submit" class="btn btn-primary">ارسال</button>
        </div>
</form>
      </div>
    </div>
  </div>
  <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/translations/fa.js"></script>
  <script>
    ClassicEditor
      .create(document.querySelector('textarea[name="editor"]'), {
        language: '<?php if(isset($_POST['lang'])){echo $_POST['lang'];} else{echo 'fa';} ?>',
        toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
      })
      .then(editor => {
        console.log(editor);
      })
      .catch(error => {
        console.error(error);
      });
  </script>
</body>
</html>