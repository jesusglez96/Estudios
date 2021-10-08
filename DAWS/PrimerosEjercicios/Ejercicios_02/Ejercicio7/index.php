<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <form action="loteria.php" method="post">
        <p>
            <label for="numero">Numeros:
                <table>
                    <?php
                    $i = 0;
                    while ($i < 100) {
                    ?>
                        <tr>
                            <td><input type="checkbox" name="num[]" value="<?php echo $i ?>"><?php echo $i ?></input></td>
                            <td><input type="checkbox" name="num[]" value="<?php echo ($i + 1) ?>"><?php echo ($i + 1) ?></input></td>
                            <td><input type="checkbox" name="num[]" value="<?php echo ($i + 2) ?>"><?php echo ($i + 2) ?></input></td>
                            <td><input type="checkbox" name="num[]" value="<?php echo ($i + 3) ?>"><?php echo ($i + 3) ?></input></td>
                            <td><input type="checkbox" name="num[]" value="<?php echo ($i + 4) ?>"><?php echo ($i + 4) ?></input></td>
                            <td><input type="checkbox" name="num[]" value="<?php echo ($i + 5) ?>"><?php echo ($i + 5) ?></input></td>
                            <td><input type="checkbox" name="num[]" value="<?php echo ($i + 6) ?>"><?php echo ($i + 6) ?></input></td>
                            <td><input type="checkbox" name="num[]" value="<?php echo ($i + 7) ?>"><?php echo ($i + 7) ?></input></td>
                            <td><input type="checkbox" name="num[]" value="<?php echo ($i + 8) ?>"><?php echo ($i + 8) ?></input></td>
                            <td><input type="checkbox" name="num[]" value="<?php echo ($i + 9) ?>"><?php echo ($i + 9) ?></input></td>
                        </tr>
                    <?php
                        $i += 10;
                    }
                    ?>
                    <!-- <tr>
                        <td><input type="checkbox" name="num[]" value="1">1</input></td>
                        <td><input type="checkbox" name="num[]" value="2">2</input></td>
                        <td><input type="checkbox" name="num[]" value="3">3</input></td>
                        <td><input type="checkbox" name="num[]" value="4">4</input></td>
                        <td><input type="checkbox" name="num[]" value="5">5</input></td>
                        <td><input type="checkbox" name="num[]" value="6">6</input></td>
                        <td><input type="checkbox" name="num[]" value="7">7</input></td>
                        <td><input type="checkbox" name="num[]" value="8">8</input></td>
                        <td><input type="checkbox" name="num[]" value="9">9</input></td>
                        <td><input type="checkbox" name="num[]" value="10">10</input></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="num[]" value="11">11</input></td>
                        <td><input type="checkbox" name="num[]" value="12">12</input></td>
                        <td><input type="checkbox" name="num[]" value="13">13</input></td>
                        <td><input type="checkbox" name="num[]" value="14">14</input></td>
                        <td><input type="checkbox" name="num[]" value="15">15</input></td>
                        <td><input type="checkbox" name="num[]" value="16">16</input></td>
                        <td><input type="checkbox" name="num[]" value="17">17</input></td>
                        <td><input type="checkbox" name="num[]" value="18">18</input></td>
                        <td><input type="checkbox" name="num[]" value="19">19</input></td>
                        <td><input type="checkbox" name="num[]" value="20">20</input></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="num[]" value="21">21</input></td>
                        <td><input type="checkbox" name="num[]" value="22">22</input></td>
                        <td><input type="checkbox" name="num[]" value="23">23</input></td>
                        <td><input type="checkbox" name="num[]" value="24">24</input></td>
                        <td><input type="checkbox" name="num[]" value="25">25</input></td>
                        <td><input type="checkbox" name="num[]" value="26">26</input></td>
                        <td><input type="checkbox" name="num[]" value="27">27</input></td>
                        <td><input type="checkbox" name="num[]" value="28">28</input></td>
                        <td><input type="checkbox" name="num[]" value="29">29</input></td>
                        <td><input type="checkbox" name="num[]" value="30">30</input></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="num[]" value="31">31</input></td>
                        <td><input type="checkbox" name="num[]" value="32">32</input></td>
                        <td><input type="checkbox" name="num[]" value="33">33</input></td>
                        <td><input type="checkbox" name="num[]" value="34">34</input></td>
                        <td><input type="checkbox" name="num[]" value="35">35</input></td>
                        <td><input type="checkbox" name="num[]" value="36">36</input></td>
                        <td><input type="checkbox" name="num[]" value="37">37</input></td>
                        <td><input type="checkbox" name="num[]" value="38">38</input></td>
                        <td><input type="checkbox" name="num[]" value="39">39</input></td>
                        <td><input type="checkbox" name="num[]" value="40">40</input></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="num[]" value="41">41</input></td>
                        <td><input type="checkbox" name="num[]" value="42">42</input></td>
                        <td><input type="checkbox" name="num[]" value="43">43</input></td>
                        <td><input type="checkbox" name="num[]" value="44">44</input></td>
                        <td><input type="checkbox" name="num[]" value="45">45</input></td>
                        <td><input type="checkbox" name="num[]" value="46">46</input></td>
                        <td><input type="checkbox" name="num[]" value="47">47</input></td>
                        <td><input type="checkbox" name="num[]" value="48">48</input></td>
                        <td><input type="checkbox" name="num[]" value="49">49</input></td>
                        <td><input type="checkbox" name="num[]" value="50">50</input></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="num[]" value="51">51</input></td>
                        <td><input type="checkbox" name="num[]" value="52">52</input></td>
                        <td><input type="checkbox" name="num[]" value="53">53</input></td>
                        <td><input type="checkbox" name="num[]" value="54">54</input></td>
                        <td><input type="checkbox" name="num[]" value="55">55</input></td>
                        <td><input type="checkbox" name="num[]" value="56">56</input></td>
                        <td><input type="checkbox" name="num[]" value="57">57</input></td>
                        <td><input type="checkbox" name="num[]" value="58">58</input></td>
                        <td><input type="checkbox" name="num[]" value="59">59</input></td>
                        <td><input type="checkbox" name="num[]" value="60">60</input></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="num[]" value="61">61</input></td>
                        <td><input type="checkbox" name="num[]" value="62">62</input></td>
                        <td><input type="checkbox" name="num[]" value="63">63</input></td>
                        <td><input type="checkbox" name="num[]" value="64">64</input></td>
                        <td><input type="checkbox" name="num[]" value="65">65</input></td>
                        <td><input type="checkbox" name="num[]" value="66">66</input></td>
                        <td><input type="checkbox" name="num[]" value="67">67</input></td>
                        <td><input type="checkbox" name="num[]" value="68">68</input></td>
                        <td><input type="checkbox" name="num[]" value="69">69</input></td>
                        <td><input type="checkbox" name="num[]" value="70">70</input></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="num[]" value="71">71</input></td>
                        <td><input type="checkbox" name="num[]" value="72">72</input></td>
                        <td><input type="checkbox" name="num[]" value="73">73</input></td>
                        <td><input type="checkbox" name="num[]" value="74">74</input></td>
                        <td><input type="checkbox" name="num[]" value="75">75</input></td>
                        <td><input type="checkbox" name="num[]" value="76">76</input></td>
                        <td><input type="checkbox" name="num[]" value="77">77</input></td>
                        <td><input type="checkbox" name="num[]" value="78">78</input></td>
                        <td><input type="checkbox" name="num[]" value="79">79</input></td>
                        <td><input type="checkbox" name="num[]" value="80">80</input></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="num[]" value="81">81</input></td>
                        <td><input type="checkbox" name="num[]" value="82">82</input></td>
                        <td><input type="checkbox" name="num[]" value="83">83</input></td>
                        <td><input type="checkbox" name="num[]" value="84">84</input></td>
                        <td><input type="checkbox" name="num[]" value="85">85</input></td>
                        <td><input type="checkbox" name="num[]" value="86">86</input></td>
                        <td><input type="checkbox" name="num[]" value="87">87</input></td>
                        <td><input type="checkbox" name="num[]" value="88">88</input></td>
                        <td><input type="checkbox" name="num[]" value="89">89</input></td>
                        <td><input type="checkbox" name="num[]" value="90">90</input></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="num[]" value="91">91</input></td>
                        <td><input type="checkbox" name="num[]" value="92">92</input></td>
                        <td><input type="checkbox" name="num[]" value="93">93</input></td>
                        <td><input type="checkbox" name="num[]" value="94">94</input></td>
                        <td><input type="checkbox" name="num[]" value="95">95</input></td>
                        <td><input type="checkbox" name="num[]" value="96">96</input></td>
                        <td><input type="checkbox" name="num[]" value="97">97</input></td>
                        <td><input type="checkbox" name="num[]" value="98">98</input></td>
                        <td><input type="checkbox" name="num[]" value="99">99</input></td>
                        <td><input type="checkbox" name="num[]" value="0">0</input></td>
                    </tr> -->
                </table>
            </label>
        </p>
        <p>
            <label for="serie">Serie:
                <input type="number" id="serie" name="serie" min=1 max=999>
            </label>
        </p>
        <p>
            <button type="submit">Enviar</button>
        </p>
    </form>
</body>

</html>