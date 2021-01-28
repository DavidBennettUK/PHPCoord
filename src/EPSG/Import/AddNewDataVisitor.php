<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\EPSG\Import;

use function array_unshift;
use function ksort;
use PhpParser\BuilderFactory;
use PhpParser\Node;
use PhpParser\Node\Stmt\ClassLike;
use PhpParser\NodeTraverser;
use PhpParser\NodeVisitorAbstract;
use const SORT_NATURAL;
use function str_replace;

class AddNewDataVisitor extends NodeVisitorAbstract
{
    private array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
        foreach ($this->data as &$dataRow) {
            unset($dataRow['constant_help']);
            unset($dataRow['deprecated']);
            unset($dataRow['doc_help']);
            unset($dataRow['extent']);
            if (isset($dataRow['name'])) {
                $dataRow['name'] = str_replace('_LOWERCASE', '', $dataRow['name']);
            }
        }
        ksort($this->data, SORT_NATURAL);
    }

    public function enterNode(Node $node)
    {
        $factory = new BuilderFactory();
        if ($node instanceof ClassLike) {
            $property = $factory->property('sridData')->makeProtected()->makeStatic()->setType('array')->setDefault($this->data)->setDocComment('');
            array_unshift($node->stmts, $property->getNode());

            return NodeTraverser::STOP_TRAVERSAL;
        }

        return null;
    }
}
