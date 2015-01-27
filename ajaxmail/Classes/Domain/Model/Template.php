<?phpnamespace TRENDMARKE\Ajaxmail\Domain\Model;/*************************************************************** *  Copyright notice * *  (c) 2014 Julian Ereth <info@trendmarke.de>, trendmarke GmbH *   *  All rights reserved * *  This script is part of the TYPO3 project. The TYPO3 project is *  free software; you can redistribute it and/or modify *  it under the terms of the GNU General Public License as published by *  the Free Software Foundation; either version 3 of the License, or *  (at your option) any later version. * *  The GNU General Public License can be found at *  http://www.gnu.org/copyleft/gpl.html. * *  This script is distributed in the hope that it will be useful, *  but WITHOUT ANY WARRANTY; without even the implied warranty of *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the *  GNU General Public License for more details. * *  This copyright notice MUST APPEAR in all copies of the script! ***************************************************************//** * * * @package ajaxmail * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later * */class Template extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {	/**	 * title	 *	 * @var string	 * @validate NotEmpty	 */	protected $title;	/**	 * subject	 *	 * @var string	 * @validate NotEmpty	 */	protected $subject;    /**     * confirmationSubject     *     * @var string     * @validate NotEmpty     */    protected $confirmationSubject;	/**	 * receiver	 *	 * @var string	 * @validate NotEmpty	 */	protected $receiver;	/**	 * sender	 *	 * @var string	 * @validate NotEmpty	 */	protected $sender;    /**     * senderName     *     * @var string     * @validate NotEmpty     */    protected $senderName;	/**	 * cc	 *	 * @var string	 */	protected $cc;	/**	 * bcc	 *	 * @var string	 */	protected $bcc;	/**	 * message	 *	 * @var string	 */	protected $message;    /**     * confirmationReceiver     *     * @var string     */    protected $confirmationReceiver;    /**     * confirmationMessage     *     * @var string     */    protected $confirmationMessage;    /**     * statement     *     * @var string     */    protected $statement;	/**	 * attachment	 *	 * @var string	 */	protected $attachment;	/**	 * __construct	 *	 * @return void	 */	public function __construct() {	}	/**	 * Returns the title	 *	 * @return string $title	 */	public function getTitle() {		return $this->title;	}	/**	 * Sets the title	 *	 * @param string $title	 * @return void	 */	public function setTitle($title) {		$this->title = $title;	}	/**	 * Returns the subject	 *	 * @return string $subject	 */	public function getSubject() {		return $this->subject;	}	/**	 * Sets the subject	 *	 * @param string $subject	 * @return void	 */	public function setSubject($subject) {		$this->subject = $subject;	}    /**     * Returns the subject     *     * @return string $confirmationSubject     */    public function getConfirmationSubject() {        return $this->confirmationSubject;    }    /**     * Sets the subject     *     * @param string $confirmationSubject     * @return void     */    public function setConfirmationSubject($confirmationSubject) {        $this->confirmationSubject = $confirmationSubject;    }	/**	 * Returns the receiver	 *	 * @return string $receiver	 */	public function getReceiver() {		return $this->receiver;	}	/**	 * Sets the receiver	 *	 * @param string $receiver	 * @return void	 */	public function setReceiver($receiver) {		$this->receiver = $receiver;	}	/**	 * Returns the sender	 *	 * @return string $sender	 */	public function getSender() {		return $this->sender;	}	/**	 * Sets the sender	 *	 * @param string $sender	 * @return void	 */	public function setSender($sender) {		$this->sender = $sender;	}    /**     * Returns the senderName     *     * @return string $senderName     */    public function getSenderName() {        return $this->senderName;    }    /**     * Sets the sender     *     * @param string $sender     * @return void     */    public function setSenderName($senderName) {        $this->senderName = $senderName;    }	/**	 * Returns the cc	 *	 * @return string $cc	 */	public function getCc() {		return $this->cc;	}	/**	 * Sets the cc	 *	 * @param string $cc	 * @return void	 */	public function setCc($cc) {		$this->cc = $cc;	}	/**	 * Returns the bcc	 *	 * @return string $bcc	 */	public function getBcc() {		return $this->bcc;	}	/**	 * Sets the bcc	 *	 * @param string $bcc	 * @return void	 */	public function setBcc($bcc) {		$this->bcc = $bcc;	}    /**     * Returns the confirmationReceiver     *     * @return string $confirmationReceiver     */    public function getConfirmationReceiver() {        return $this->confirmationReceiver;    }    /**     * Sets the bcc     *     * @param string $confirmationReceiver     * @return void     */    public function setConfirmationReceiver($confirmationReceiver) {        $this->confirmationReceiver = $confirmationReceiver;    }	/**	 * Returns the message	 *	 * @return string $message	 */	public function getMessage() {		return $this->message;	}	/**	 * Sets the message	 *	 * @param string $message	 * @return void	 */	public function setMessage($message) {		$this->message = $message;	}    /**     * Returns the confirmationMessage     *     * @return string $confirmationMessage     */    public function getConfirmationMessage() {        return $this->confirmationMessage;    }    /**     * Sets the statement     *     * @param string $confirmationMessage     * @return void     */    public function setStatement($statement) {        $this->statement = $statement;    }    /**     * Returns the statement     *     * @return string $statement     */    public function getStatement() {        return $this->statement;    }    /**     * Sets the confirmationMessage     *     * @param string $confirmationMessage     * @return void     */    public function setConfirmationMessage($confirmationMessage) {        $this->confirmationMessage = $confirmationMessage;    }	/**	 * Returns the attachment	 *	 * @return string $attachment	 */	public function getAttachment() {		return $this->attachment;	}	/**	 * Sets the attachment	 *	 * @param string $attachment	 * @return void	 */	public function setAttachment($attachment) {		$this->attachment = $attachment;	}}?>