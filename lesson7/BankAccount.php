<?php

class BankAccount
{
    public static $LOAN_PERCENT = .03; // can change
    const TAX = .09; // we can't change
                        // whithout '$'
}

var_dump(BankAccount::TAX);
