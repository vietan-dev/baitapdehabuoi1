<?php
    // 6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.

    $array = array(5, 2, 8, 10, 1);
    sort($array);
    echo "CÂU 6: Mảng sau khi sắp xếp tăng dần: ";
    print_r($array);

    // 7.Viết chương trình PHP để tính giai thừa của một số nguyên dương.

    function calculateFactorial($n) {
        // Kiểm tra xem đầu vào có phải là số nguyên dương không
        if (!is_int($n) || $n < 0) {
            return "Vui lòng nhập vào một số nguyên dương.";
        }
        if ($n == 0 || $n == 1) {
            return 1;
        } else {
            return $n * calculateFactorial($n - 1);
        }
    }
    // Nhập số nguyên từ người dùng
    $positiveInteger = 5;
    // Gọi hàm để tính giai thừa và in kết quả
    $result = calculateFactorial($positiveInteger);
    echo "<br>"."CÂU 7: The factorial of $positiveInteger is: $result"."<br>";

    // 8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.

    function isPrime($number) {
        if ($number < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    function findPrimesInRange($start, $end) {
        $primes = [];
        for ($i = $start; $i <= $end; $i++) {
            if (isPrime($i)) {
                $primes[] = $i;
            }
        }
        return $primes;
    }
    $start = 10;
    $end = 50;
    $primeNumbers = findPrimesInRange($start, $end);
    echo "CÂU 8: Các số nguyên tố trong khoảng từ $start đến $end là: " . implode(', ', $primeNumbers)."<br>";

    // 9.Viết chương trình PHP để tính tổng của các số trong một mảng.

    function calculateSum($array) {
        $sum = 0;

        foreach ($array as $number) {
            $sum += $number;
        }
        return $sum;
    }
    $Array = array(1, 5, 7, 27, 3);
    echo "CÂU 9: Tổng của mảng là: " . calculateSum($Array). "<br>";
    // 10.Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.

    function fibonacciInRange($start, $end) {
        $fibonacciNumbers = array();
        $a = 0;
        $b = 1;

        while ($a <= $end) {
            if ($a >= $start) {
                $fibonacciNumbers[] = $a;
            }

            $temp = $a + $b;
            $a = $b;
            $b = $temp;
        }

        return $fibonacciNumbers;
    }
    $start = 1;
    $end = 100;
    $fibonacciNumbersInRange = fibonacciInRange($start, $end);

    echo "CÂU 10: Các số Fibonacci trong khoảng từ $start đến $end là: ";
    echo implode(', ', $fibonacciNumbersInRange)."<br>";

    // 11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.

    function isArmstrong($number) {
        // Chuyển số thành một mảng các chữ số
        $digits = str_split($number);

        // Tính tổng lũy thừa của các chữ số
        $sum = 0;
        $n = count($digits);
        foreach ($digits as $digit) {
            $sum += pow($digit, $n);
        }

        // Kiểm tra xem tổng lũy thừa có bằng số ban đầu hay không
        return $sum == $number;
    }
    $testNumber = 154;
    echo "CÂU 11: ";
    if (isArmstrong($testNumber)) {
        echo $testNumber . " là số Armstrong.";
    } else {
        echo $testNumber . " không phải là số Armstrong.";
    }

    //cau 12
    // function hadnleInsertElement ($element, $position, $arr){
    //     $lengthArr = count($arr);
    //     $index = $position - 1;
    //     if($index > $lengthArr-1){
    //         $index = $lengthArr;
    //     }else if($index < 0){
    //         $index = 0;
    //     }
    //     $arr1 = array_slice($arr,0, $index);
    //     $arr2 = array_slice($arr,$index);
    //
    //     $resultArray = array_merge($arr1, array($element), $arr2);
    //     echo "mang cuoi" . var_dump($resultArray) . "<br/>";
    // }
    //
    // $cars = array("Volvo", "BMW", "Toyota");
    // echo "Mang ban dau" . "<br/>";
    // echo var_dump($cars) . "<br/>";
    // echo "Mang sau khi chen". "<br/>";
    // insertElement("vin", -1, $cars);


    // cau 13
    // array_unique: so sánh và lấy phần tử lặp cuối cùng
    // array_diff_assoc: so sánh cả key và value
    // array_diff: so sánh value
    // function hadnleRemoveDuplicateElement ($arr) {
    //     $arrDuplicatesSingle = array_unique(array_diff_assoc($arr, array_unique($arr)));
    //     return array_diff($arr, $arrDuplicatesSingle);
    // }
    // $cars = array("Volvo", "Volvo" , "Volvo", "Toyota");
    // echo "Mang ban dau" . "<br/>";
    // echo var_dump($cars) . "<br/>";
    // echo "Mang sau khi loai bo phan tu lap". "<br/>";
    // echo var_dump (hadnleRemoveDuplicateElement($cars));

    // cau 14
    // function handleFindIndexOfElement ($arr, $element) {
    //     return array_search($element, $arr);
    // }
    // $var = "BMW";
    // //
    // $cars = array("Volvo", "Vin" , "BMW", "Toyota");
    // echo "Mang ban dau" . "<br/>";
    // echo var_dump($cars) . "<br/>";
    // echo "Phần tử {$var} có index là: " . "<br/>";
    // echo handleFindIndexOfElement($cars, $var);

    // cau15
    // $string = "hello world";
    // $reverseString = strrev($string);
    // echo "Chuoi dao nguoc cua {$string} la: {$reverseString}";

    // cau 16
    // $cars = array("Volvo", "BMW", "Toyota", "Toyota");
    // echo "Mang ban dau" . "<br/>";
    // echo var_dump($cars) . "<br/>";
    // $lengthArr = count($cars);
    // echo "So luong phan tu trong mang la: {$lengthArr}";

    // cau 17
    $string = "12321";
    function handleCheckPlaindrome ($string) {
        $string = str_replace(' ', '', $string);
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
        $string = strtolower($string);

        $reverse = strrev($string);

        return $string == $reverse;
    }

    if(handleCheckPlaindrome($string)){
        echo "{$string} is Palindrome";
    }else{
        echo "{$string} is not Palindrome";
    }

    function demSoLanXuatHien($mang, $phaneTuCanDem) {
    $dem = 0;
    
    // Duyệt qua mảng và tăng biến đếm nếu phần tử trùng khớp
    foreach ($mang as $phaneTu) {
        if ($phaneTu == $phaneTuCanDem) {
            $dem++;
        }
    }
    
    return $dem;
    }

    // 18 Mảng ví dụ
    $mangDuLieu = array(1, 2, 3, 4, 2, 5, 2, 6, 2, 7);

    // Phần tử cần đếm
    $phaneTuCanDem = 2;

    // Gọi hàm để đếm số lần xuất hiện
    $soLanXuatHien = demSoLanXuatHien($mangDuLieu, $phaneTuCanDem);

    // Hiển thị kết quả
    echo "Số lần xuất hiện của phần tử $phaneTuCanDem trong mảng là: $soLanXuatHien";

    // 19 Mảng ví dụ
    $mangDuLieu = array(5, 2, 8, 1, 6);

    // Sắp xếp mảng theo thứ tự giảm dần
    rsort($mangDuLieu);

    // Hiển thị mảng sau khi sắp xếp
    echo "Mảng sau khi sắp xếp giảm dần: ";
    print_r($mangDuLieu);

    //20
    // Mảng ví dụ
    $mangDuLieu = array(1, 2, 3, 4, 5);

    // Thêm phần tử vào đầu mảng
    $phaneTuDau = 0;
    array_unshift($mangDuLieu, $phaneTuDau);

    // Thêm phần tử vào cuối mảng
    $phaneTuCuoi = 6;
    array_push($mangDuLieu, $phaneTuCuoi);

    // Hiển thị mảng sau khi thêm phần tử
    echo "Mảng sau khi thêm phần tử vào đầu và cuối: ";
    print_r($mangDuLieu);

    //22
    function timSoLonThuHai($mang) {
        // Sắp xếp mảng theo thứ tự giảm dần
        rsort($mang);
        
        // Lấy phần tử lớn thứ hai
        $soLonThuHai = $mang[1];
        
        return $soLonThuHai;
    }

    // Mảng ví dụ
    $mangDuLieu = array(5, 2, 8, 1, 6);

    // Gọi hàm để tìm số lớn thứ hai
    $soLonThuHai = timSoLonThuHai($mangDuLieu);

    // Hiển thị kết quả
    echo "Số lớn thứ hai trong mảng là: $soLonThuHai";

    //23
    function kiemTraSoHoanHao($so) {
        if ($so <= 0) {
            return false;
        }

        $tongUocSo = 0;

        for ($i = 1; $i <= $so / 2; $i++) {
            if ($so % $i == 0) {
                $tongUocSo += $i;
            }
        }

        return $tongUocSo == $so;
    }
    // Số ví dụ
    $soCanKiemTra = 28;

    // Kiểm tra và hiển thị kết quả
    if (kiemTraSoHoanHao($soCanKiemTra)) {
        echo "$soCanKiemTra là số hoàn hảo.";
    } else {
        echo "$soCanKiemTra không là số hoàn hảo.";
    }

    // 24 Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
    function findOddMax($array)
    {
        $OddMax = 0;
        foreach ($array as $arr) {
            if ($arr % 2 == 1 && $OddMax < $arr) {
                $OddMax = $arr;
            }
        }
        if ($OddMax == 0) {
            $OddMax = "Mảng không có số lẻ";
        }
        return $OddMax;
    };
    $n = array(2, 4, 1, 5, 6, 7, 9, 22, 11, 98, 202, 101);
    echo "Số lẻ lớn nhất trong mảng là: " . findOddMax($n);



    // 25 Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
    function checkPrime($num)
    {
        $count = 0;
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                $count = $count + 1;
            }
        };
        if ($count == 0) {
            echo "$num la so nguyen to";
        } else {
            echo "$num khong la so nguyen to";
        }
    }
    checkPrime(2);



    // 26 Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
    function findPosNum($array)
    {
        $posMax = -1;
        foreach ($array as $arr) {
            if ($arr > 0 && $arr > $posMax) {
                $posMax = $arr;
            }
        }
        if ($posMax == -1) {
            $posMax = "Mảng không có số dương";
        }
        return $posMax;
    }
    $arr = array('-1', '-20', '0', '10', '110', '102', '-100','10000');
    echo 'Số dương lớn nhất trong mảng là: ' . findPosNum($arr);



    // 27 Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
    function findNegNum($array)
    {
        $negMax = 1;
        //tìm số âm đầu tiên
        foreach ($array as $arr){
            if ($arr < 0 ){
                $negMax=$arr;
                break;
                echo $negMax;
            }
        }
        //tìm số âm lớn nhất
        foreach ($array as $arr) {
            if ($arr < 0 && $arr > $negMax) {
                $negMax = $arr;
            }
        }
        if ($negMax == 1) {
            $negMax = "Mảng không có số âm";
        }
        return $negMax;
    }
    $arr = array('-100', '-20', '0', '10', '110', '102', '-100','10000','-1');
    echo 'Số âm lớn nhất trong mảng là: ' . findNegNum($arr);



    // 28 Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
    function sumOdd($n)
    {
        if ( $n <= 0) {
            echo "Không tính được tổng các số lẻ từ 1 đến $n";
        } else {        
            $sumOdd = round($n/2) **2;
            return $sumOdd;
        }
    }
    $n = 2.9;
    echo "Tổng các số lẻ từ 1 đến $n là: " . sumOdd($n);



    // 29 Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
    function findSquareNum($array)
    {
        foreach ($array as $arr) {
            if (sqrt($arr) == intval(sqrt($arr))) {
                echo "$arr ";
            }
        }
    };
    $arr = array(-5, -4, 3, 6, 7, 8, 9, 10, 11, 12, 13, 25, 36, 39, 49);
    echo 'Các số chính phương trong mảng là: ';
    echo(findSquareNum($arr));



    // 30 Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
    function checkStrpos($str1, $str2)
    {
        if (strpos($str1, $str2) !== false) {
            echo "$str2 có trong $str1!";
        } else {
            echo "$str2 không có trong $str1!";
        }
    }
    $stra = "Hello Word!";
    $strb = "Word!";
    checkStrpos($stra, $strb);

?>