<?php

namespace App\Traits;

use Symfony\Component\HttpFoundation\Response;

trait GlobalResponseTrait
{

    /**
     * Return response
     *
     * @param string $message
     * @param array $records
     * @param int $outcomeCode
     * @param string $errorStage
     *
     * @return \Illuminate\Http\Response
     * @author Ali Shaikh <ali.shaikh@itfaq.global>
     */
    public function returnResponse(string $message = '', array $records = [], int $outcomeCode = 200, string $errorStage = ''): \Illuminate\Http\Response
    {
        $numOfRecords = 0;

        if (is_array($records)) {
            $numOfRecords = count($records);
        } elseif (preg_match('/App/i', get_class($records))) {
            $numOfRecords = 1;
        } elseif (preg_match('/Collection/i', get_class($records))) {
            $numOfRecords = $records->count();
        } elseif (preg_match('/Pagination/i', get_class($records))) {
            $data = ($records->toArray());
            $numOfRecords = count($data['data']);
        }

        $outCome = 'OK';

        if ($outcomeCode != 200) {
            $outCome = Response::$statusTexts[$outcomeCode];
            $numOfRecords = 0;
        }

        $response['_metadata'] = [
            'status_text' => $outCome,
            'status_code' => $outcomeCode,
            'number_of_records' => $numOfRecords,
            'message' => $message,
        ];

        if ($errorStage != '') {
            $response['_metadata']['errorState'] = $errorStage;
        }

        $response['records'] = $records;

        $response['errors'] = [];

        return response($response, $outcomeCode);
    }

    /**
     * Returns error response
     *
     * @param $code
     * @param string|null $codeInfo
     * @param array $errorsMessage
     * @return \Illuminate\Http\Response
     *
     * @author Ali Shaikh <ali.shaikh@itfaq.global>
     */
    public function returnResponseError($code, string $codeInfo = null, array $errorsMessage = []): \Illuminate\Http\Response
    {
        $errors = Response::$statusTexts;

        if (!isset($errors[$code])) {
            $code = 1000;
        }

        $response['_metadata'] = [
            'status_text' => $errors[$code],
            'status_code' => $code,
            'number_of_records' => 0,
            'message' => $codeInfo,
        ];

        $response['records'] = [];
        $response['errors'] = $errorsMessage;

        return response($response, $code);
    }

    /**
     * Format invalid field error messages
     *
     * @param $errors
     * @return array
     *
     * @author Ali Shaikh <ali.shaikh@itfaq.global>
     */
    public function formatErrorMessages($errors): array
    {
        $errorsArray = [];
        $index = 0;

        foreach ($errors as $field => $errorMessage) {

            $errorsArray[$index] = [
                "status" => 'INVALID_PARAMS',
                "message" => $errorMessage,
                "field" => $field
            ];

            $index++;
        }

        return $errorsArray;
    }

    /**
     * API response codes and response messages.
     *
     * @return string[]
     *
     * @author Ali Shaikh <ali.shaikh@itfaq.global>
     */
    public function responseCodeMessages(): array
    {

        return [
            100 => 'Continue',
            101 => 'Switching Protocols',
            103 => 'Early Hints',
            200 => 'OK',
            201 => 'Created',
            202 => 'Accepted',
            203 => 'Non-Authoritative Information',
            204 => 'No Content',
            205 => 'Reset Content',
            206 => 'Partial Content',
            300 => 'Multiple Choices',
            301 => 'Moved Permanently',
            302 => 'Found',
            303 => 'See Other',
            304 => 'Not Modified',
            307 => 'Temporary Redirect',
            308 => 'Permanent Redirect',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            402 => 'Payment Required',
            403 => 'Forbidden',
            404 => 'Not Found',
            405 => 'Method Not Allowed',
            406 => 'Not Acceptable',
            408 => 'Request Timeout',
            409 => 'Conflict',
            410 => 'Gone',
            411 => 'Length Required',
            412 => 'Precondition Failed',
            413 => 'Payload Too Large',
            414 => 'URI Too Long',
            415 => 'Unsupported Media Type',
            416 => 'Range Not Satisfiable',
            417 => 'Expectation Failed',
            418 => 'I\'m a teapot',
            422 => 'Unprocessable Entity',
            425 => 'Too Early',
            426 => 'Upgrade Required',
            428 => 'Precondition Required',
            429 => 'Too Many Requests',
            431 => 'Request Header Fields Too Large',
            451 => 'Unavailable For Legal Reasons',
            500 => 'Internal Server Error',
            501 => 'Not Implemented',
            502 => 'Bad Gateway',
            503 => 'Service Unavailable',
            504 => 'Gateway Timeout',
            505 => 'HTTP Version Not Supported',
            506 => 'Variant Also Negotiates',
            507 => 'Insufficient Storage',
            508 => 'Loop Detected',
            510 => 'Not Extended',
            511 => 'Network Authentication Required',
            999 => 'Unknown Error'
        ];
    }

}
