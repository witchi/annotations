<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\Common\Annotations;

/**
 * Wrapper class for \ReflectionParameter, which enhance it
 * by a method getDocComment() 
 *
 * @author André Rothe <andre.rothe@phosco.info>
 */
class ReflectionParameter {

	private $delegate;
	private $docComment;

	public function __construct(\ReflectionParameter $param, $docComment) {
		$this->delegate = $param;
		$this->docComment = $docComment;
	}

	public function getDocComment() {
		return $this->docComment;
	}

	public function allowsNull() {
		return $this->delegate->allowsNull();
	}

	public function canBePassedByValue() {
		return $this->delegate->canBePassedByValue();
	}

	public function getClass() {
		return $this->delegate->getClass();
	}

	public function getDeclaringClass() {
		return $this->delegate->getDeclaringClass();
	}

	public function getDeclaringFunction() {
		return $this->delegate->getDeclaringFunction();
	}

	public function getDefaultValue() {
		return $this->delegate->getDefaultValue();
	}

	public function getDefaultValueConstantName() {
		return $this->delegate->getDefaultValueConstantName();
	}

	public function getName() {
		return $this->delegate->getName();
	}

	public function getPosition() {
		return $this->delegate->getPosition();
	}

	public function getType() {
		return $this->delegate->getType();
	}

	public function hasType() {
		return $this->delegate->hasType();
	}

	public function isArray() {
		return $this->delegate->isArray();
	}

	public function isCallable() {
		return $this->delegate->isCallable();
	}

	public function isDefaultValueAvailable() {
		return $this->delegate->isDefaultValueAvailable();
	}

	public function isDefaultValueConstant() {
		return $this->delegate->isDefaultValueConstant();
	}

	public function isOptional() {
		return $this->delegate->isOptional();
	}

	public function isPassedByReference() {
		return $this->delegate->isPassedByReference();
	}

	public function isVariadic() {
		return $this->delegate->isVariadic();
	}

	public function __toString() {
		//TODO: add new docComment
		return $this->delegate->__toString();
	}
}
?>
