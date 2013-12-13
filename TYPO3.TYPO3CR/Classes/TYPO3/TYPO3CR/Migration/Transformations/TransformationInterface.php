<?php
namespace TYPO3\TYPO3CR\Migration\Transformations;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "TYPO3CR".               *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License, either version 3 of the   *
 * License, or (at your option) any later version.                        *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

/**
 * Transformation are used to change nodes as needed. They may do anything to a node
 * in the execute() method and will be asked if they can transform a node through a
 * call to isTransformable().
 *
 * Settings given to a transformation will be passed to accordingly named setters.
 */
interface TransformationInterface {

	/**
	 * Returns TRUE if the given node can be transformed by this transformation.
	 *
	 * @param \TYPO3\TYPO3CR\Domain\Model\NodeInterface $node
	 * @return boolean
	 */
	function isTransformable(\TYPO3\TYPO3CR\Domain\Model\NodeInterface $node);

	/**
	 * Execute the transformation on the given node.
	 *
	 * @param \TYPO3\TYPO3CR\Domain\Model\NodeInterface $node
	 * @return \TYPO3\TYPO3CR\Domain\Model\NodeInterface
	 */
	function execute(\TYPO3\TYPO3CR\Domain\Model\NodeInterface $node);

}
