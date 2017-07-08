<?php


namespace Procuration;

/**
 * Class Request
 * @package Procuration
 */
class Request
{
    const ELECTION_TURN_FIRST  = 1;
    const ELECTION_TURN_SECOND = 2;
    const ELECTION_TURN_BOTH   = 3;

    const REASON_WORK = 1;
    const REASON_HANDICAP = 2;
    const REASON_HEALTH = 3;
    const REASON_ASSISTANCE = 4;
    const REASON_FORMATION = 5;
    const REASON_HOLIDAYS = 6;
    const REASON_NOT_IN_CITY = 7;

    const ELECTION_LIST_TYPE_CITY = 1;
    const ELECTION_LIST_TYPE_CONSULATE = 2;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var \DateTimeInterface
     */
    private $dateOfBirth;

    /**
     * @var string
     */
    private $streetNumber;

    /**
     * @var string
     */
    private $streetSubNumber;

    /**
     * @var string
     */
    private $streetType;

    /**
     * @var string
     */
    private $streetName;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $voteCity;

    /**
     * @var string
     */
    private $voteRegion;

    /**
     * @var string
     */
    private $aifFirstName;

    /**
     * @var string
     */
    private $aifLastName;

    /**
     * @var \DateTimeInterface
     */
    private $aifDateOfBirth;

    /**
     * @var string
     */
    private $aifStreetNumber;

    /**
     * @var string
     */
    private $aifStreetType;

    /**
     * @var string
     */
    private $aifStreetName;

    /**
     * @var string
     */
    private $aifZipCode;

    /**
     * @var string
     */
    private $aifCity;

    /**
     * @var int
     */
    private $electionListType;

    /**
     * @var string
     */
    private $electionType;

    /**
     * @var \DateTimeInterface
     */
    private $electionDate;

    /**
     * @var int
     */
    private $electionTurn;

    /**
     * @var \DateTimeInterface
     */
    private $untilDate;

    /**
     * @var int
     */
    private $reason;

    /**
     * @param string $firstName
     *
     * @return Request
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @param string $lastName
     *
     * @return Request
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @param \DateTimeInterface $dateOfBirth
     *
     * @return Request
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * @param string $streetNumber
     *
     * @return Request
     */
    public function setStreetNumber(string $streetNumber): Request
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }

    /**
     * @param string $streetSubNumber
     *
     * @return Request
     */
    public function setStreetSubNumber(string $streetSubNumber): Request
    {
        $this->streetSubNumber = $streetSubNumber;

        return $this;
    }

    /**
     * @param string $streetType
     *
     * @return Request
     */
    public function setStreetType(string $streetType): Request
    {
        $this->streetType = $streetType;

        return $this;
    }

    /**
     * @param string $streetName
     *
     * @return Request
     */
    public function setStreetName(string $streetName): Request
    {
        $this->streetName = $streetName;

        return $this;
    }

    /**
     * @param string $zipCode
     *
     * @return Request
     */
    public function setZipCode(string $zipCode): Request
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * @param string $city
     *
     * @return Request
     */
    public function setCity(string $city): Request
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @param string $phoneNumber
     *
     * @return Request
     */
    public function setPhoneNumber(string $phoneNumber): Request
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @param string $email
     *
     * @return Request
     */
    public function setEmail(string $email): Request
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param string $voteCity
     *
     * @return Request
     */
    public function setVoteCity(string $voteCity): Request
    {
        $this->voteCity = $voteCity;

        return $this;
    }

    /**
     * @param string $voteRegion
     *
     * @return Request
     */
    public function setVoteRegion(string $voteRegion): Request
    {
        $this->voteRegion = $voteRegion;

        return $this;
    }

    /**
     * @param int $electionListType
     *
     * @return Request
     */
    public function setElectionListType(int $electionListType): Request
    {
        $this->electionListType = $electionListType;

        return $this;
    }

    /**
     * @param string $aifFirstName
     *
     * @return Request
     */
    public function setAifFirstName(string $aifFirstName): Request
    {
        $this->aifFirstName = $aifFirstName;

        return $this;
    }

    /**
     * @param string $aifLastName
     *
     * @return Request
     */
    public function setAifLastName(string $aifLastName): Request
    {
        $this->aifLastName = $aifLastName;

        return $this;
    }

    /**
     * @param \DateTimeInterface $aifDateOfBirth
     *
     * @return Request
     */
    public function setAifDateOfBirth(\DateTimeInterface $aifDateOfBirth): Request
    {
        $this->aifDateOfBirth = $aifDateOfBirth;

        return $this;
    }

    /**
     * @param string $aifStreetNumber
     *
     * @return Request
     */
    public function setAifStreetNumber(string $aifStreetNumber): Request
    {
        $this->aifStreetNumber = $aifStreetNumber;

        return $this;
    }

    /**
     * @param string $aifStreetType
     *
     * @return Request
     */
    public function setAifStreetType(string $aifStreetType): Request
    {
        $this->aifStreetType = $aifStreetType;

        return $this;
    }

    /**
     * @param string $aifStreetName
     *
     * @return Request
     */
    public function setAifStreetName(string $aifStreetName): Request
    {
        $this->aifStreetName = $aifStreetName;

        return $this;
    }

    /**
     * @param string $aifZipCode
     *
     * @return Request
     */
    public function setAifZipCode(string $aifZipCode): Request
    {
        $this->aifZipCode = $aifZipCode;

        return $this;
    }

    /**
     * @param string $aifCity
     *
     * @return Request
     */
    public function setAifCity(string $aifCity): Request
    {
        $this->aifCity = $aifCity;

        return $this;
    }

    /**
     * @param string $electionType
     *
     * @return Request
     */
    public function setElectionType(string $electionType): Request
    {
        $this->electionType = $electionType;

        return $this;
    }

    /**
     * @param \DateTimeInterface $electionDate
     *
     * @return Request
     */
    public function setElectionDate(\DateTimeInterface $electionDate): Request
    {
        $this->electionDate = $electionDate;

        return $this;
    }

    /**
     * @param string $electionTurn
     *
     * @return Request
     */
    public function setElectionTurn(string $electionTurn): Request
    {
        $this->electionTurn = $electionTurn;

        return $this;
    }

    /**
     * @param \DateTimeInterface $untilDate
     *
     * @return Request
     */
    public function setUntilDate(\DateTimeInterface $untilDate): Request
    {
        $this->untilDate = $untilDate;

        return $this;
    }

    /**
     * @param int $reason
     *
     * @return Request
     */
    public function setReason(int $reason): Request
    {
        $this->reason = $reason;

        return $this;
    }

    public function extract(): array
    {
        $data = [
            'topmostSubform[0].Page1[0].Champ_de_texte1[0]' => $this->lastName,
            'topmostSubform[0].Page1[0].Champ_de_texte2[0]' => $this->firstName,
            'topmostSubform[0].Page1[0].Champ_de_texte3[0]' => $this->streetNumber,
            'topmostSubform[0].Page1[0].Champ_de_texte4[0]' => $this->streetSubNumber,
            'topmostSubform[0].Page1[0].Champ_de_texte5[0]' => $this->streetType,
            'topmostSubform[0].Page1[0].Champ_de_texte6[0]' => $this->streetName,
            'topmostSubform[0].Page1[0].Champ_de_texte7[0]' => $this->zipCode,
            'topmostSubform[0].Page1[0].Champ_de_texte8[0]' => $this->city,
            'topmostSubform[0].Page1[0].Champ_de_texte9[0]' => $this->phoneNumber,
            'topmostSubform[0].Page1[0].Date_Heure10[0]'    => $this->dateOfBirth->format('dmY'),
            'topmostSubform[0].Page1[0].Case_&#224;_cocher29[0]' => true,
            'topmostSubform[0].Page1[0].Champ_de_texte17[0]' => $this->aifLastName,
            'topmostSubform[0].Page2[0].Champ_de_texte9[0]' => $this->aifLastName,
            'topmostSubform[0].Page1[0].Champ_de_texte18[0]' => $this->aifFirstName,
            'topmostSubform[0].Page2[0].Champ_de_texte10[0]' => $this->aifFirstName,
            'topmostSubform[0].Page1[0].Champ_de_texte19[0]' => $this->aifStreetNumber,
            'topmostSubform[0].Page1[0].Champ_de_texte21[0]' => $this->aifStreetType,
            'topmostSubform[0].Page1[0].Champ_de_texte22[0]' => $this->aifStreetName,
            'topmostSubform[0].Page1[0].Champ_de_texte23[0]' => $this->aifZipCode,
            'topmostSubform[0].Page1[0].Champ_de_texte24[0]' => $this->aifCity,
            'topmostSubform[0].Page1[0].Date_Heure26[0]' => $this->aifDateOfBirth->format('dmY'),
            'topmostSubform[0].Page1[0].Champ_de_texte8[1]' => $this->email,
            'topmostSubform[0].Page2[0].Champ_de_texte1[0]' => $this->lastName,
            'topmostSubform[0].Page2[0].Champ_de_texte2[0]' => $this->firstName,
            'topmostSubform[0].Page2[0].Groupe_de_boutons_radio3[0]' => $this->reason,
            'topmostSubform[0].Page2[0].Champ_de_texte5[0]' => $this->lastName,
            'topmostSubform[0].Page2[0].Champ_de_texte6[0]' => $this->firstName,
            'topmostSubform[0].Page1[0].Case_à_cocher12[0]' => true,
            'topmostSubform[0].Page2[0].Case_à_cocher8[0]' => true,
            'topmostSubform[0].Page1[0].Groupe_de_boutons_radio11[0]' => $this->electionListType,
        ];

        if ($this->electionListType === self::ELECTION_LIST_TYPE_CITY) {
            $data['topmostSubform[0].Page1[0].Champ_de_texte13[0]'] = $this->voteCity;
            $data['topmostSubform[0].Page1[0].Champ_de_texte14[0]'] = $this->voteRegion;
        } else {
            $data['topmostSubform[0].Page1[0].Champ_de_texte15[0]'] = $this->voteCity;
            $data['topmostSubform[0].Page1[0].Champ_de_texte16[0]'] = $this->voteRegion;
        }

        if (!$this->untilDate) {
            $data['topmostSubform[0].Page1[0].Groupe_de_boutons_radio27[0]'] = 1;
            $data['topmostSubform[0].Page1[0].Date_Heure32[0]'] = $this->electionDate->format('dmY');
            $data['topmostSubform[0].Page2[0].Date_Heure14[0]'] = $this->electionDate->format('dmY');
            $data['topmostSubform[0].Page1[0].premier_second_deux[0]'] = $this->electionTurn;
            $data['topmostSubform[0].Page2[0].premier_second_deux[0]'] = $this->electionTurn;
            $data['topmostSubform[0].Page1[0].Champ_de_texte25[0]'] = $this->electionType;
            $data['topmostSubform[0].Page2[0].Champ_de_texte20[0]'] = $this->electionType;
            $data['topmostSubform[0].Page2[0].Groupe_de_boutons_radio11[0]'] = 1;
        } else {
            $data['topmostSubform[0].Page1[0].Date_Heure31[0]'] = $this->untilDate->format('dmY');
            $data['topmostSubform[0].Page2[0].Date_Heure13[0]'] = $this->untilDate->format('dmY');
            $data['topmostSubform[0].Page1[0].Groupe_de_boutons_radio27[0]'] = 2;
            $data['topmostSubform[0].Page2[0].Groupe_de_boutons_radio11[0]'] = 2;
        }

        return $data;
    }
}