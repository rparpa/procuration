<?php


namespace Procuration;

use mikehaertl\pdftk\Pdf;

/**
 * Class ProcurationFiller
 * @package Procuration
 */
class ProcurationFiller
{
    public function fill()
    {
        $file = __DIR__ . '/../../template/cerfa_template.pdf';

        // Fill form with data array
        $pdf = new Pdf($file);

        $request = new Request;
        $request
            ->setFirstName('John')
            ->setLastName('Doe')
            ->setDateOfBirth(new \DateTime('1971-01-20'))
            ->setStreetNumber(42)
            ->setStreetSubNumber('ter')
            ->setStreetType('rue')
            ->setStreetName("de la Foi")
            ->setCity('Paris')
            ->setZipCode('75012')
            ->setEmail('john.doe@gmail.com')
            ->setPhoneNumber('+33665656565')
            ->setVoteCity('Paris')
            ->setVoteRegion('Paris')
            ->setAifFirstName('Jane')
            ->setAifLastName('Duh')
            ->setAifStreetNumber('2')
            ->setAifStreetType('rue')
            ->setAifStreetName('de la Foi')
            ->setAifZipCode('75012')
            ->setAifCity('Paris')
            ->setAifDateOfBirth(new \DateTime('1980-05-23'))
            ->setElectionType('présidentielle')
            ->setElectionDate(new \DateTime)
            ->setElectionTurn(Request::ELECTION_TURN_BOTH)
            ->setReason(Request::REASON_HOLIDAYS)
            ->setElectionListType(Request::ELECTION_LIST_TYPE_CONSULATE)
        ;

        $pdf
            ->fillForm($request->extract())
        ;

        return $pdf;
    }
}