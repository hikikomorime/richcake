<?php
/* SVN FILE: $Id: rich.php 6311 2008-12-12 13:28:10Z mfandrade $ */
/**
 * Short description for file.
 *
 * This file contains the RichHelper class.  The RichHelper class
 * is a helper that implements a set of advanced visual components for
 * CakePHP (helper) to improve user interface experience that resembles
 * JBoss RichFaces(tm).
 *
 * PHP versions 4 and 5
 *
 * RichHelper :  The RichCake Project <http://richcake.googlecode.com/>
 * Copyright 2008-2009, Marcelo de Freitas Andrade, The RichCake Project
 *								Tv. Barao do Triunfo, pass. S. Pedro, 91
 *								66095-720, Marco, Belem, PA, Amazonia, Brazil
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright		Copyright 2008-2009, Marcelo de Freitas Andrade, The RichCake Project.
 * @link				http://richcake.googlecode.com/ The RichCake Project
 * @version			$Revision: 1 $
 * @modifiedby		$LastChangedBy: mfandrade $
 * @lastmodified	$Date: 2008-12-12 13:28:10 -0300 (Sat, 12 Dec 2008) $
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
class RichHelper extends FormHelper {
	var $helpers= array("Html", "Javascript", "Ajax");

    // Rich Menu -------------------------------------------------------
	function contextMenu() {
        return $this->output("<strong>Not implemented yet!</strong>");
	}

	function dropDownMenu() {
        return $this->output("<strong>Not implemented yet!</strong>");
	}

	// Rich Trees ------------------------------------------------------
	function tree() {
        return $this->output("<strong>Not implemented yet!</strong>");
	}

	// Rich Output -----------------------------------------------------
	function modalPanel() {
        return $this->output("<strong>Not implemented yet!</strong>");
	}

	// Rich Input ------------------------------------------------------
	function calendar() {
        return $this->output("<strong>Not implemented yet!</strong>");
	}

	function combobox() {
        return $this->output("<strong>Not implemented yet!</strong>");
	}

	function fileUpload() {
        return $this->output("<strong>Not implemented yet!</strong>");
	}

	function inplaceInput() {
        return $this->output("<strong>Not implemented yet!</strong>");
	}

	function inplaceSelect() {
        return $this->output("<strong>Not implemented yet!</strong>");
	}

	function inputNumberSlider() {
        return $this->output("<strong>Not implemented yet!</strong>");
	}

    /**
     * <p>Shows a spinner element.  A spinner is an input text html
     * element that accepts primarily an integer number as input and
     * have some arrows microbuttons inside it.  These buttons can be
     * used to increase or decrease the value in the input.</p>
     * 
     * <p>The implementation of this element uses the {@link
     * http://code.google.com/p/prototype-spin-button/
     * prototype-spin-button} project.</p>
     * 
     * @author mfandrade
     * @version 0.1
     * @see http://livedemo.exadel.com/richfaces-demo/richfaces/inputNumberSpinner.jsf?c=inputNumberSpinner
     */ 
	function inputNumberSpinner($fieldName, $minValue = 0, $maxValue = 100, $options = array()) {
        return $this->output("<strong>Not implemented yet!</strong>");
	}

?>
