<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite2052acf148d38ef98edc5f85a853ab3
{
    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'oop\\pph21\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'oop\\pph21\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'oop\\pph21\\AbstractCalculator' => __DIR__ . '/../..' . '/src/AbstractCalculator.php',
        'oop\\pph21\\CalculatorInterface' => __DIR__ . '/../..' . '/src/CalculatorInterface.php',
        'oop\\pph21\\FirstRuleCalculator' => __DIR__ . '/../..' . '/src/FirstRuleCalculator.php',
        'oop\\pph21\\FourthRuleCalculator' => __DIR__ . '/../..' . '/src/FourthRuleCalculator.php',
        'oop\\pph21\\PPH21Calculator' => __DIR__ . '/../..' . '/src/PPH21Calculator.php',
        'oop\\pph21\\SecondRuleCalculator' => __DIR__ . '/../..' . '/src/SecondRuleCalculator.php',
        'oop\\pph21\\ThirdRuleCalculator' => __DIR__ . '/../..' . '/src/ThirdRuleCalculator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite2052acf148d38ef98edc5f85a853ab3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite2052acf148d38ef98edc5f85a853ab3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite2052acf148d38ef98edc5f85a853ab3::$classMap;

        }, null, ClassLoader::class);
    }
}