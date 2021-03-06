<?php

/*
 * This file is part of the HTML sanitizer project.
 *
 * (c) Titouan Galopin <galopintitouan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HtmlSanitizer\Extension\MathMl;

use HtmlSanitizer\Extension\ExtensionInterface;

/**
 * @author Titouan Galopin <galopintitouan@gmail.com>
 *
 * @final
 */
class MathMlExtension implements ExtensionInterface
{
    public function getName(): string
    {
        return 'mathml';
    }

    public function createNodeVisitors(array $config = []): array
    {
        return [
            'math' => new NodeVisitor\MathNodeVisitor($config['tags']['math'] ?? []),
            'abs' => new NodeVisitor\AbsNodeVisitor($config['tags']['abs'] ?? []),
            'and' => new NodeVisitor\AndNodeVisitor($config['tags']['and'] ?? []),
            'annotation' => new NodeVisitor\AnnotationNodeVisitor($config['tags']['annotation'] ?? []),
            'annotation-xml' => new NodeVisitor\AnnotationxmlNodeVisitor($config['tags']['annotation-xml'] ?? []),
            'apply' => new NodeVisitor\ApplyNodeVisitor($config['tags']['apply'] ?? []),
            'approx' => new NodeVisitor\ApproxNodeVisitor($config['tags']['approx'] ?? []),
            'arccos' => new NodeVisitor\ArccosNodeVisitor($config['tags']['arccos'] ?? []),
            'arccosh' => new NodeVisitor\ArccoshNodeVisitor($config['tags']['arccosh'] ?? []),
            'arccot' => new NodeVisitor\ArccotNodeVisitor($config['tags']['arccot'] ?? []),
            'arccoth' => new NodeVisitor\ArccothNodeVisitor($config['tags']['arccoth'] ?? []),
            'arccsc' => new NodeVisitor\ArccscNodeVisitor($config['tags']['arccsc'] ?? []),
            'arccsch' => new NodeVisitor\ArccschNodeVisitor($config['tags']['arccsch'] ?? []),
            'arcsec' => new NodeVisitor\ArcsecNodeVisitor($config['tags']['arcsec'] ?? []),
            'arcsech' => new NodeVisitor\ArcsechNodeVisitor($config['tags']['arcsech'] ?? []),
            'arcsin' => new NodeVisitor\ArcsinNodeVisitor($config['tags']['arcsin'] ?? []),
            'arcsinh' => new NodeVisitor\ArcsinhNodeVisitor($config['tags']['arcsinh'] ?? []),
            'arctan' => new NodeVisitor\ArctanNodeVisitor($config['tags']['arctan'] ?? []),
            'arctanh' => new NodeVisitor\ArctanhNodeVisitor($config['tags']['arctanh'] ?? []),
            'arg' => new NodeVisitor\ArgNodeVisitor($config['tags']['arg'] ?? []),
            'bind' => new NodeVisitor\BindNodeVisitor($config['tags']['bind'] ?? []),
            'bvar' => new NodeVisitor\BvarNodeVisitor($config['tags']['bvar'] ?? []),
            'card' => new NodeVisitor\CardNodeVisitor($config['tags']['card'] ?? []),
            'cartesianproduct' => new NodeVisitor\CartesianproductNodeVisitor($config['tags']['cartesianproduct'] ?? []),
            'cbytes' => new NodeVisitor\CbytesNodeVisitor($config['tags']['cbytes'] ?? []),
            'ceiling' => new NodeVisitor\CeilingNodeVisitor($config['tags']['ceiling'] ?? []),
            'cerror' => new NodeVisitor\CerrorNodeVisitor($config['tags']['cerror'] ?? []),
            'ci' => new NodeVisitor\CiNodeVisitor($config['tags']['ci'] ?? []),
            'cn' => new NodeVisitor\CnNodeVisitor($config['tags']['cn'] ?? []),
            'codomain' => new NodeVisitor\CodomainNodeVisitor($config['tags']['codomain'] ?? []),
            'complexes' => new NodeVisitor\ComplexesNodeVisitor($config['tags']['complexes'] ?? []),
            'compose' => new NodeVisitor\ComposeNodeVisitor($config['tags']['compose'] ?? []),
            'condition' => new NodeVisitor\ConditionNodeVisitor($config['tags']['condition'] ?? []),
            'conjugate' => new NodeVisitor\ConjugateNodeVisitor($config['tags']['conjugate'] ?? []),
            'cos' => new NodeVisitor\CosNodeVisitor($config['tags']['cos'] ?? []),
            'cosh' => new NodeVisitor\CoshNodeVisitor($config['tags']['cosh'] ?? []),
            'cot' => new NodeVisitor\CotNodeVisitor($config['tags']['cot'] ?? []),
            'coth' => new NodeVisitor\CothNodeVisitor($config['tags']['coth'] ?? []),
            'cs' => new NodeVisitor\CsNodeVisitor($config['tags']['cs'] ?? []),
            'csc' => new NodeVisitor\CscNodeVisitor($config['tags']['csc'] ?? []),
            'csch' => new NodeVisitor\CschNodeVisitor($config['tags']['csch'] ?? []),
            'csymbol' => new NodeVisitor\CsymbolNodeVisitor($config['tags']['csymbol'] ?? []),
            'curl' => new NodeVisitor\CurlNodeVisitor($config['tags']['curl'] ?? []),
            'declare' => new NodeVisitor\DeclareNodeVisitor($config['tags']['declare'] ?? []),
            'degree' => new NodeVisitor\DegreeNodeVisitor($config['tags']['degree'] ?? []),
            'determinant' => new NodeVisitor\DeterminantNodeVisitor($config['tags']['determinant'] ?? []),
            'diff' => new NodeVisitor\DiffNodeVisitor($config['tags']['diff'] ?? []),
            'divergence' => new NodeVisitor\DivergenceNodeVisitor($config['tags']['divergence'] ?? []),
            'divide' => new NodeVisitor\DivideNodeVisitor($config['tags']['divide'] ?? []),
            'domain' => new NodeVisitor\DomainNodeVisitor($config['tags']['domain'] ?? []),
            'domainofapplication' => new NodeVisitor\DomainofapplicationNodeVisitor($config['tags']['domainofapplication'] ?? []),
            'emptyset' => new NodeVisitor\EmptysetNodeVisitor($config['tags']['emptyset'] ?? []),
            'eq' => new NodeVisitor\EqNodeVisitor($config['tags']['eq'] ?? []),
            'equivalent' => new NodeVisitor\EquivalentNodeVisitor($config['tags']['equivalent'] ?? []),
            'eulergamma' => new NodeVisitor\EulergammaNodeVisitor($config['tags']['eulergamma'] ?? []),
            'exists' => new NodeVisitor\ExistsNodeVisitor($config['tags']['exists'] ?? []),
            'exp' => new NodeVisitor\ExpNodeVisitor($config['tags']['exp'] ?? []),
            'exponentiale' => new NodeVisitor\ExponentialeNodeVisitor($config['tags']['exponentiale'] ?? []),
            'factorial' => new NodeVisitor\FactorialNodeVisitor($config['tags']['factorial'] ?? []),
            'factorof' => new NodeVisitor\FactorofNodeVisitor($config['tags']['factorof'] ?? []),
            'false' => new NodeVisitor\FalseNodeVisitor($config['tags']['false'] ?? []),
            'floor' => new NodeVisitor\FloorNodeVisitor($config['tags']['floor'] ?? []),
            'fn' => new NodeVisitor\FnNodeVisitor($config['tags']['fn'] ?? []),
            'forall' => new NodeVisitor\ForallNodeVisitor($config['tags']['forall'] ?? []),
            'gcd' => new NodeVisitor\GcdNodeVisitor($config['tags']['gcd'] ?? []),
            'geq' => new NodeVisitor\GeqNodeVisitor($config['tags']['geq'] ?? []),
            'grad' => new NodeVisitor\GradNodeVisitor($config['tags']['grad'] ?? []),
            'gt' => new NodeVisitor\GtNodeVisitor($config['tags']['gt'] ?? []),
            'ident' => new NodeVisitor\IdentNodeVisitor($config['tags']['ident'] ?? []),
            'image' => new NodeVisitor\ImageNodeVisitor($config['tags']['image'] ?? []),
            'imaginary' => new NodeVisitor\ImaginaryNodeVisitor($config['tags']['imaginary'] ?? []),
            'imaginaryi' => new NodeVisitor\ImaginaryiNodeVisitor($config['tags']['imaginaryi'] ?? []),
            'implies' => new NodeVisitor\ImpliesNodeVisitor($config['tags']['implies'] ?? []),
            'in' => new NodeVisitor\InNodeVisitor($config['tags']['in'] ?? []),
            'infinity' => new NodeVisitor\InfinityNodeVisitor($config['tags']['infinity'] ?? []),
            'int' => new NodeVisitor\IntNodeVisitor($config['tags']['int'] ?? []),
            'integers' => new NodeVisitor\IntegersNodeVisitor($config['tags']['integers'] ?? []),
            'intersect' => new NodeVisitor\IntersectNodeVisitor($config['tags']['intersect'] ?? []),
            'interval' => new NodeVisitor\IntervalNodeVisitor($config['tags']['interval'] ?? []),
            'inverse' => new NodeVisitor\InverseNodeVisitor($config['tags']['inverse'] ?? []),
            'lambda' => new NodeVisitor\LambdaNodeVisitor($config['tags']['lambda'] ?? []),
            'laplacian' => new NodeVisitor\LaplacianNodeVisitor($config['tags']['laplacian'] ?? []),
            'lcm' => new NodeVisitor\LcmNodeVisitor($config['tags']['lcm'] ?? []),
            'leq' => new NodeVisitor\LeqNodeVisitor($config['tags']['leq'] ?? []),
            'limit' => new NodeVisitor\LimitNodeVisitor($config['tags']['limit'] ?? []),
            'list' => new NodeVisitor\ListNodeVisitor($config['tags']['list'] ?? []),
            'ln' => new NodeVisitor\LnNodeVisitor($config['tags']['ln'] ?? []),
            'log' => new NodeVisitor\LogNodeVisitor($config['tags']['log'] ?? []),
            'logbase' => new NodeVisitor\LogbaseNodeVisitor($config['tags']['logbase'] ?? []),
            'lowlimit' => new NodeVisitor\LowlimitNodeVisitor($config['tags']['lowlimit'] ?? []),
            'lt' => new NodeVisitor\LtNodeVisitor($config['tags']['lt'] ?? []),
            'maction' => new NodeVisitor\MactionNodeVisitor($config['tags']['maction'] ?? []),
            'maligngroup' => new NodeVisitor\MaligngroupNodeVisitor($config['tags']['maligngroup'] ?? []),
            'malignmark' => new NodeVisitor\MalignmarkNodeVisitor($config['tags']['malignmark'] ?? []),
            'matrix' => new NodeVisitor\MatrixNodeVisitor($config['tags']['matrix'] ?? []),
            'matrixrow' => new NodeVisitor\MatrixrowNodeVisitor($config['tags']['matrixrow'] ?? []),
            'max' => new NodeVisitor\MaxNodeVisitor($config['tags']['max'] ?? []),
            'mean' => new NodeVisitor\MeanNodeVisitor($config['tags']['mean'] ?? []),
            'median' => new NodeVisitor\MedianNodeVisitor($config['tags']['median'] ?? []),
            'menclose' => new NodeVisitor\MencloseNodeVisitor($config['tags']['menclose'] ?? []),
            'merror' => new NodeVisitor\MerrorNodeVisitor($config['tags']['merror'] ?? []),
            'mfenced' => new NodeVisitor\MfencedNodeVisitor($config['tags']['mfenced'] ?? []),
            'mfrac' => new NodeVisitor\MfracNodeVisitor($config['tags']['mfrac'] ?? []),
            'mglyph' => new NodeVisitor\MglyphNodeVisitor($config['tags']['mglyph'] ?? []),
            'mi' => new NodeVisitor\MiNodeVisitor($config['tags']['mi'] ?? []),
            'min' => new NodeVisitor\MinNodeVisitor($config['tags']['min'] ?? []),
            'minus' => new NodeVisitor\MinusNodeVisitor($config['tags']['minus'] ?? []),
            'mlabeledtr' => new NodeVisitor\MlabeledtrNodeVisitor($config['tags']['mlabeledtr'] ?? []),
            'mlongdiv' => new NodeVisitor\MlongdivNodeVisitor($config['tags']['mlongdiv'] ?? []),
            'mmultiscripts' => new NodeVisitor\MmultiscriptsNodeVisitor($config['tags']['mmultiscripts'] ?? []),
            'mn' => new NodeVisitor\MnNodeVisitor($config['tags']['mn'] ?? []),
            'mo' => new NodeVisitor\MoNodeVisitor($config['tags']['mo'] ?? []),
            'mode' => new NodeVisitor\ModeNodeVisitor($config['tags']['mode'] ?? []),
            'moment' => new NodeVisitor\MomentNodeVisitor($config['tags']['moment'] ?? []),
            'momentabout' => new NodeVisitor\MomentaboutNodeVisitor($config['tags']['momentabout'] ?? []),
            'mover' => new NodeVisitor\MoverNodeVisitor($config['tags']['mover'] ?? []),
            'mpadded' => new NodeVisitor\MpaddedNodeVisitor($config['tags']['mpadded'] ?? []),
            'mphantom' => new NodeVisitor\MphantomNodeVisitor($config['tags']['mphantom'] ?? []),
            'mprescripts' => new NodeVisitor\MprescriptsNodeVisitor($config['tags']['mprescripts'] ?? []),
            'mroot' => new NodeVisitor\MrootNodeVisitor($config['tags']['mroot'] ?? []),
            'mrow' => new NodeVisitor\MrowNodeVisitor($config['tags']['mrow'] ?? []),
            'ms' => new NodeVisitor\MsNodeVisitor($config['tags']['ms'] ?? []),
            'mscarries' => new NodeVisitor\MscarriesNodeVisitor($config['tags']['mscarries'] ?? []),
            'mscarry' => new NodeVisitor\MscarryNodeVisitor($config['tags']['mscarry'] ?? []),
            'msgroup' => new NodeVisitor\MsgroupNodeVisitor($config['tags']['msgroup'] ?? []),
            'msline' => new NodeVisitor\MslineNodeVisitor($config['tags']['msline'] ?? []),
            'mspace' => new NodeVisitor\MspaceNodeVisitor($config['tags']['mspace'] ?? []),
            'msqrt' => new NodeVisitor\MsqrtNodeVisitor($config['tags']['msqrt'] ?? []),
            'msrow' => new NodeVisitor\MsrowNodeVisitor($config['tags']['msrow'] ?? []),
            'mstack' => new NodeVisitor\MstackNodeVisitor($config['tags']['mstack'] ?? []),
            'mstyle' => new NodeVisitor\MstyleNodeVisitor($config['tags']['mstyle'] ?? []),
            'msub' => new NodeVisitor\MsubNodeVisitor($config['tags']['msub'] ?? []),
            'msubsup' => new NodeVisitor\MsubsupNodeVisitor($config['tags']['msubsup'] ?? []),
            'msup' => new NodeVisitor\MsupNodeVisitor($config['tags']['msup'] ?? []),
            'mtable' => new NodeVisitor\MtableNodeVisitor($config['tags']['mtable'] ?? []),
            'mtd' => new NodeVisitor\MtdNodeVisitor($config['tags']['mtd'] ?? []),
            'mtext' => new NodeVisitor\MtextNodeVisitor($config['tags']['mtext'] ?? []),
            'mtr' => new NodeVisitor\MtrNodeVisitor($config['tags']['mtr'] ?? []),
            'munder' => new NodeVisitor\MunderNodeVisitor($config['tags']['munder'] ?? []),
            'munderover' => new NodeVisitor\MunderoverNodeVisitor($config['tags']['munderover'] ?? []),
            'naturalnumbers' => new NodeVisitor\NaturalnumbersNodeVisitor($config['tags']['naturalnumbers'] ?? []),
            'neq' => new NodeVisitor\NeqNodeVisitor($config['tags']['neq'] ?? []),
            'none' => new NodeVisitor\NoneNodeVisitor($config['tags']['none'] ?? []),
            'not' => new NodeVisitor\NotNodeVisitor($config['tags']['not'] ?? []),
            'notanumber' => new NodeVisitor\NotanumberNodeVisitor($config['tags']['notanumber'] ?? []),
            'notin' => new NodeVisitor\NotinNodeVisitor($config['tags']['notin'] ?? []),
            'notprsubset' => new NodeVisitor\NotprsubsetNodeVisitor($config['tags']['notprsubset'] ?? []),
            'notsubset' => new NodeVisitor\NotsubsetNodeVisitor($config['tags']['notsubset'] ?? []),
            'or' => new NodeVisitor\OrNodeVisitor($config['tags']['or'] ?? []),
            'otherwise' => new NodeVisitor\OtherwiseNodeVisitor($config['tags']['otherwise'] ?? []),
            'outerproduct' => new NodeVisitor\OuterproductNodeVisitor($config['tags']['outerproduct'] ?? []),
            'partialdiff' => new NodeVisitor\PartialdiffNodeVisitor($config['tags']['partialdiff'] ?? []),
            'pi' => new NodeVisitor\PiNodeVisitor($config['tags']['pi'] ?? []),
            'piece' => new NodeVisitor\PieceNodeVisitor($config['tags']['piece'] ?? []),
            'piecewise' => new NodeVisitor\PiecewiseNodeVisitor($config['tags']['piecewise'] ?? []),
            'plus' => new NodeVisitor\PlusNodeVisitor($config['tags']['plus'] ?? []),
            'power' => new NodeVisitor\PowerNodeVisitor($config['tags']['power'] ?? []),
            'primes' => new NodeVisitor\PrimesNodeVisitor($config['tags']['primes'] ?? []),
            'product' => new NodeVisitor\ProductNodeVisitor($config['tags']['product'] ?? []),
            'prsubset' => new NodeVisitor\PrsubsetNodeVisitor($config['tags']['prsubset'] ?? []),
            'quotient' => new NodeVisitor\QuotientNodeVisitor($config['tags']['quotient'] ?? []),
            'rationals' => new NodeVisitor\RationalsNodeVisitor($config['tags']['rationals'] ?? []),
            'real' => new NodeVisitor\RealNodeVisitor($config['tags']['real'] ?? []),
            'reals' => new NodeVisitor\RealsNodeVisitor($config['tags']['reals'] ?? []),
            'reln' => new NodeVisitor\RelnNodeVisitor($config['tags']['reln'] ?? []),
            'rem' => new NodeVisitor\RemNodeVisitor($config['tags']['rem'] ?? []),
            'root' => new NodeVisitor\RootNodeVisitor($config['tags']['root'] ?? []),
            'scalarproduct' => new NodeVisitor\ScalarproductNodeVisitor($config['tags']['scalarproduct'] ?? []),
            'sdev' => new NodeVisitor\SdevNodeVisitor($config['tags']['sdev'] ?? []),
            'sec' => new NodeVisitor\SecNodeVisitor($config['tags']['sec'] ?? []),
            'sech' => new NodeVisitor\SechNodeVisitor($config['tags']['sech'] ?? []),
            'selector' => new NodeVisitor\SelectorNodeVisitor($config['tags']['selector'] ?? []),
            'semantics' => new NodeVisitor\SemanticsNodeVisitor($config['tags']['semantics'] ?? []),
            'sep' => new NodeVisitor\SepNodeVisitor($config['tags']['sep'] ?? []),
            'set' => new NodeVisitor\SetNodeVisitor($config['tags']['set'] ?? []),
            'setdiff' => new NodeVisitor\SetdiffNodeVisitor($config['tags']['setdiff'] ?? []),
            'share' => new NodeVisitor\ShareNodeVisitor($config['tags']['share'] ?? []),
            'sin' => new NodeVisitor\SinNodeVisitor($config['tags']['sin'] ?? []),
            'sinh' => new NodeVisitor\SinhNodeVisitor($config['tags']['sinh'] ?? []),
            'subset' => new NodeVisitor\SubsetNodeVisitor($config['tags']['subset'] ?? []),
            'sum' => new NodeVisitor\SumNodeVisitor($config['tags']['sum'] ?? []),
            'tan' => new NodeVisitor\TanNodeVisitor($config['tags']['tan'] ?? []),
            'tanh' => new NodeVisitor\TanhNodeVisitor($config['tags']['tanh'] ?? []),
            'tendsto' => new NodeVisitor\TendstoNodeVisitor($config['tags']['tendsto'] ?? []),
            'times' => new NodeVisitor\TimesNodeVisitor($config['tags']['times'] ?? []),
            'transpose' => new NodeVisitor\TransposeNodeVisitor($config['tags']['transpose'] ?? []),
            'true' => new NodeVisitor\TrueNodeVisitor($config['tags']['true'] ?? []),
            'union' => new NodeVisitor\UnionNodeVisitor($config['tags']['union'] ?? []),
            'uplimit' => new NodeVisitor\UplimitNodeVisitor($config['tags']['uplimit'] ?? []),
            'variance' => new NodeVisitor\VarianceNodeVisitor($config['tags']['variance'] ?? []),
            'vector' => new NodeVisitor\VectorNodeVisitor($config['tags']['vector'] ?? []),
            'vectorproduct' => new NodeVisitor\VectorproductNodeVisitor($config['tags']['vectorproduct'] ?? []),
            'xor' => new NodeVisitor\XorNodeVisitor($config['tags']['xor'] ?? []),
        ];
    }
}
