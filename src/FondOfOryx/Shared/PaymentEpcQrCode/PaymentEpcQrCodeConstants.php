<?php

declare(strict_types = 1);

namespace FondOfOryx\Shared\PaymentEpcQrCode;

interface PaymentEpcQrCodeConstants
{
    public const EPC_QR_CODE_DATA_VERSION = 'EPC_QR_CODE_DATA_VERSION';
    public const EPC_QR_CODE_DATA_VERSION_DEFAULT = '002';
    public const EPC_QR_CODE_DATA_SERVICE_TAG = 'EPC_QR_CODE_DATA_SERVICE_TAG';
    public const EPC_QR_CODE_DATA_SERVICE_TAG_DEFAULT = 'BCD';
    public const EPC_QR_CODE_DATA_ENCODING = 'EPC_QR_CODE_DATA_ENCODING';
    public const EPC_QR_CODE_DATA_ENCODING_DEFAULT = 'UTF-8';
    public const EPC_QR_CODE_DATA_TYPE = 'EPC_QR_CODE_DATA_TYPE';
    public const EPC_QR_CODE_DATA_TYPE_DEFAULT = 'SCT';
    public const EPC_QR_CODE_DATA_PURPOSE = 'EPC_QR_CODE_DATA_PURPOSE';

    public const EPC_QR_CODE_QR_CODE_FORMAT = 'EPC_QR_CODE_QR_CODE_FORMAT';
    public const EPC_QR_CODE_QR_CODE_ENCODING_OVERRIDE = 'EPC_QR_CODE_QR_CODE_ENCODING_OVERRIDE';
    public const EPC_QR_CODE_QR_CODE_ERROR_CORRECTION_LEVEL_OVERRIDE = 'EPC_QR_CODE_QR_CODE_ERROR_CORRECTION_LEVEL_OVERRIDE';
    public const EPC_QR_CODE_QR_CODE_SIZE_OVERRIDE = 'EPC_QR_CODE_QR_CODE_SIZE_OVERRIDE';
    public const EPC_QR_CODE_QR_CODE_MARGIN_OVERRIDE = 'EPC_QR_CODE_QR_CODE_MARGIN_OVERRIDE';
    public const EPC_QR_CODE_QR_CODE_FOREGROUND_COLOR_OVERRIDE = 'EPC_QR_CODE_QR_CODE_FOREGROUND_COLOR_OVERRIDE';
    public const EPC_QR_CODE_QR_CODE_ROUNDED_BLOCK_SIZE_MODE_OVERRIDE = 'EPC_QR_CODE_QR_CODE_ROUNDED_BLOCK_SIZE_MODE_OVERRIDE';
    public const EPC_QR_CODE_QR_CODE_BACKGROUND_COLOR_OVERRIDE = 'EPC_QR_CODE_QR_CODE_BACKGROUND_COLOR_OVERRIDE';
}