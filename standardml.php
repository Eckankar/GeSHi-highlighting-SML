<?php
/*************************************************************************************
 * standardml.php
 * ----------
 * Author: Sebastian Paaske Tørholm (eckankar@gmail.com)
 * Copyright: (c) 2011 Sebastian Paaske Tørholm, Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.0
 * Date Started: 2011/10/25
 *
 * SML (Standard ML) language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2011/10/25 (1.0.0) XXX: fix date
 *   -  First Release
 *
 * TODO (updated 2011/10/25)
 * -------------------------
 * - Get things working.
 * - Figure out what Int<N>Array, Int<N>Array2, ... means (the <n>)
 * - Add modules specific to SML/NJ and MLton  
 * - Get list of types.
 *
 *************************************************************************************
 *
 *   This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'Standard ML',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array('(*' => '*)'),
    'COMMENT_REGEXP' => array(1 => '/\(\*(?:(?R)|.)+?\*\)/s'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => "\\",
    'KEYWORDS' => array(
        /* SML reserved words (Introduction to Programming Using SML; appendix B.1.1) */
        1 => array(
            'abstype', 'and', 'andalso', 'as', 'case', 'datatype', 'do',
            'else', 'end', 'exception', 'fn', 'fun', 'handle', 'if', 'in',
            'infix', 'infixr', 'let', 'local', 'nonfix', 'of', 'op', 'open',
            'orelse', 'raise', 'rec', 'then', 'type', 'val', 'while', 'with',
            'withtype'
            ),
        /* SML module reserved words (Introduction to Programming Using SML; appendix C.1.1) */
        2 => array(
            'eqtype', 'functor', 'include', 'sharing', 'sig', 'signature',
            'struct', 'structure', 'where'
            ),
        /* Structures */
        3 => array(
            /* Standard structures: http://www.standardml.org/Basis/overview.html */
            /* required */
            'Array', 'ArraySlice', 'BinIO', 'BinPrimIO', 'Bool', 'Byte',
            'CharArray', 'CharArraySlice', 'Char', 'CharVector',
            'CharVectorSlice', 'CommandLine', 'Date', 'General', 'IEEEReal',
            'Int', 'IO', 'LargeInt', 'LargeReal', 'LargeWord', 'List',
            'ListPair', 'Math', 'Option', 'OS', 'Position', 'Real',
            'StringCvt', 'String', 'Substring', 'TextIO', 'TextPrimIO', 'Text',
            'Timer', 'Time', 'VectorSlice', 'Vector', 'Word8Array',
            'Word8ArraySlice', 'Word8Vector', 'Word8VectorSlice', 'Word8',
            'Word',
            /* optional */
            'Array2', 'BoolArray', 'BoolArray2', 'BoolArraySlice', 'BoolVector',
            'BoolVectorSlice', 'CharArray2', 'FixedInt', 'GenericSock',
            'INetSock', 'IntArray', 'IntArray2', 'IntArraySlice', 'IntVector',
            'IntVectorSlice', /* Int<N>* left out */ 'IntInf', 'NetHostDB',
            'NetProtDB', 'NetServDB', /* PackWord<N>* left out */ 'PackRealBig',
            'PackRealLittle', /* PackReal<N>* left out */ 'Posix', 'RealArray2',
            'RealArray', 'RealArraySlice', 'RealVector', 'RealVectorSlice',
            /* Real<N>* left out */ 'Socket', 'SysWord', 'UnixSock', 'Unix',
            'WideCharArray', 'WideCharArray2', 'WideCharArraySlice', 'WideChar',
            'WideCharVector', 'WideCharVectorSlice', 'WideString', 'WideSubstring',
            'WideTextPrimIO', 'WideText', 'Windows', /* Word<N>* left out */

            /* Functors */
            'ImperativeIO', 'PrimIO', 'StreamIO',

            /* Specific to Moscow ML: http://www.itu.dk/~sestoft/mosmllib/index.html */
            'Arraysort', 'BasicIO', 'Binarymap', 'BinIO', 'Callback',
            'Dynarray', 'Dynlib', 'Gdbm', 'Gdimage', 'Help', 'Intmap', 'Intset',
            'Lexing', 'Listsort', 'Location', 'Meta', 'Mosml', 'Mosmlcgi',
            'Mosmlcookie', 'Msp', 'Mysql', 'NJ93', 'Nonstdio', 'Parsing',
            'Polygdbm', 'Polyhash', 'Postgres', 'PP', 'Random', 'Regex', 'Socket',
            'Splaymap', 'Splayset', 'Susp', 'Weak',
            ),
        /* Signatures */
        4 => array(
            'ARRAY', 'ARRAY_SLICE', 'BIN_IO', 'BOOL', 'BYTE', 'CHAR', 'COMMAND_LINE',
            'DATE', 'GENERAL', 'IEEE_REAL', 'IMPERATIVE_IO', 'INTEGER', 'IO', 'LIST',
            'LIST_PAIR', 'MATH', 'MONO_ARRAY', 'MONO_ARRAY_SLICE', 'MONO_VECTOR',
            'MONO_VECTOR_SLICE', 'OPTION', 'OS', 'OS_FILE_SYS', 'OS_IO', 'OS_PATH',
            'OS_PROCESS', 'PRIM_IO', 'REAL', 'STREAM_IO', 'STRING', 'STRING_CVT',
            'SUBSTRING', 'TEXT', 'TEXT_IO', 'TEXT_STREAM_IO', 'TIME', 'TIMER',
            'VECTOR', 'VECTOR_SLICE', 'WORD'
            ),
        /* Standard types */
        5 => array (
            /* todo */
            ),
        /* Standard functions */
        6 => array(
                /* todo */
            ),
        /* Standard exceptions */
        7 => array (
            /* Introduction to Programming Using SML; appendix D.1.1 */
            'Bind', 'Chr', 'Div', 'Domain', 'Empty', 'Fail', 'Interrupt',
            'Match', 'Option', 'Overflow', 'Size', 'Subscript',

            /* Moscow ML-specific */
            'Span', 'Graphic', 'Invalid_argument', 'Io', 'Out_of_memory', 'SysErr'
            )
        ),
    /* Symbols (Introduction to Programming Using SML; appendix B.1.3) */
    'SYMBOLS' => array(
            '!', '%', '&', '$', '#', '+', '-', '/', ':', '<', '=', '>', '?',
            '@', '\\', '~', '\'', '^', '|', '*'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true, /* reserved words */
        2 => true, /* module reserved words */
        3 => true, /* structures */
        4 => true, /* signatures */
        5 => true, /* types */
        6 => true, /* functions */
        7 => true  /* exceptions */
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #06c; font-weight: bold;', /* reserved words */
            2 => 'color: DarkMagenta; font-weight: bold;', /* module reserved words */
            3 => 'color: DarkMagenta; font-weight: bold;', /* structures */
            4 => 'color: DarkMagenta; font-weight: bold;', /* signatures */
            5 => 'color: #06c; font-weight: bold;',  /* types */
            6 => 'color: #06c;',  /* functions */
            7 => 'color: Red; font-weight: bold;'  /* exceptions */
            ),
        'COMMENTS' => array(
            'MULTI' => 'color: #5d478b; font-style: italic;', /* light purple */
            1 => 'color: #5d478b; font-style: italic;' /* light purple */
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: red'
            ),
        'BRACKETS' => array(
            0 => 'color: #a52a2a;'
            ),
        'STRINGS' => array(
            0 => 'color: #3cb371;' /* nice green */
            ),
        'NUMBERS' => array(
            0 => 'color: #c6c;' /* pink */
            ),
        'METHODS' => array(
            1 => 'color: #060;' /* dark green */
            ),
        'SYMBOLS' => array(
            0 => 'font-weight: bold'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => '',
        5 => '',
        6 => '',
        7 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 2
);

?>
